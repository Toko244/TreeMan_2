<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\MenuSection;
use App\Models\Post;
use App\Models\PostFile;
use Illuminate\Support\Facades\Validator;
use App\Models\PostTranslation;
use App\Models\Slug;
use Carbon\Carbon;
use Redirect;
use Illuminate\Support\Facades\File;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\DB;
           
class PostController extends Controller
{

    public function index($sec){
        $section = Section::where('id', $sec)->with('translations')->first();
        if (($section->type_id >= 22 && $section->type_id <= 25) || $section->type_id == 2 || $section->type_id == 30) {
            $post = Post::where('section_id', $sec)->with(['translations', 'slugs'])->first();
            if (isset($post) && $post !== null) {
                return redirect()->route('post.edit', [app()->getLocale(), $post->id,]);
            }
            return redirect()->route('post.create', [app()->getLocale(), $sec,]);

        }
        $posts = Post::where('section_id', $sec)->orderBy('date', 'desc')->orderBy('created_at', 'desc')
		->join('post_translations', 'posts.id', '=', 'post_translations.post_id')
		->where('post_translations.locale', '=', app()->getLocale())
		->select('posts.*', 'post_translations.text', 'post_translations.desc', 'post_translations.title', 'post_translations.locale_additional', 'post_translations.slug');


		$posts = $posts->with(['translations', 'slugs'])->get();

        return view('admin.posts.list', compact(['section', 'posts']));
    }

    public function create($sec){
        $section = Section::where('id', $sec)->with('translations')->first();
        return view('admin.posts.add', compact(['section']));
    }

    public function store($sec, Request $request){

        $section = Section::where('id', $sec)->with('translations')->first();
        $values = $request->all();
        $values['section_id'] = $sec;
        $values['author_id'] = auth()->user()->id;
        $postFillable = (new Post)->getFillable();
        $postTransFillable = (new PostTranslation)->getFillable();
        
        if(isset($values['image']) && ($values['image'] != '')){
            $newimageName = uniqid() . "." . $values['image']->getClientOriginalExtension();
            $values['image']->move(config('config.file_path'), $newimageName );
            $values['image'] = '';
            $values['image'] = $newimageName;
        }
        
        if($request->has('is_component')){
            $values['additional'] = getAdditional($values, array_diff(array_keys($section->componentfields['nonTrans']), $postFillable) );
        }else{
            $values['additional'] = getAdditional($values, array_diff(array_keys($section->fields['nonTrans']), $postFillable) );
        }
		
        foreach(config('app.locales') as $locale){
			if(isset($values[$locale]['title']) && ($values[$locale]['title'] != '')){
				$values[$locale]['slug'] = SlugService::createSlug(PostTranslation::class, 'slug', $values[$locale]['title']);
			}            
            if($request->has('is_component')){
                $values[$locale]['locale_additional'] = getAdditional($values[$locale], array_diff(array_keys($section->componentfields['trans']), $postTransFillable) ); 
            }else{
                $values[$locale]['locale_additional'] = getAdditional($values[$locale], array_diff(array_keys($section->fields['trans']), $postTransFillable) ); 
            }
        }
        $post = Post::create($values);
        foreach(config('app.locales') as $locale){
            $post->slugs()->create([
                'fullSlug' => $locale.'/'.$post->translate($locale)->slug,
                'locale' => $locale
            ]);
        }
        if (isset($values['files']) && count($values['files']) > 0) {
			
            foreach($values['files'] as $key => $files){
				foreach($files['file'] as $k => $file){
					$postFile = new PostFile;
					$postFile->type = $key;
					$postFile->file = $file;
					$postFile->title = $values['files'][$key]['desc'][$k];
					$postFile->post_id = $post->id;
					$postFile->save();
				}
            }
        }
        
        return redirect()->route('post.list', [app()->getLocale(), $section->id,]);
    }


    public function edit($id){
        $post = Post::where('id', $id)->with(['translations', 'files'])->first();
        $section = Section::where('id', $post->section_id)->with('translations')->first();
            return view('admin.posts.edit', compact('section', 'post'));
    }



    public function update($id, Request $request){
        $post = Post::where('id', $id)->with('translations')->first();
        $section = Section::where('id', $post->section_id)->with('translations')->first();
        $values = $request->all();
        $postFillable = (new Post)->getFillable();
        $postTransFillable = (new PostTranslation)->getFillable();
        if(isset($values['image']) && ($values['image'] != '')){
            $newimageName = uniqid() . "." . $values['image']->getClientOriginalExtension();
            $values['image']->move(config('config.file_path'), $newimageName );
            $values['image'] = '';
            $values['image'] = $newimageName;
        }elseif(isset($values['old_image'])){
            $values['image'] = $values['old_image'];
        }
        
        
        if($request->has('is_component')){
            $values['additional'] = getAdditional($values, array_diff(array_keys($section->componentfields['nonTrans']), $postFillable) );
        }else{
            $values['additional'] = getAdditional($values, array_diff(array_keys($section->fields['nonTrans']), $postFillable) );
        }

        foreach(config('app.locales') as $locale){
			if($values[$locale]['title'] != $post->$locale->title){
				$values[$locale]['slug'] = SlugService::createSlug(PostTranslation::class, 'slug', $values[$locale]['title']);
			}                        
            if($request->has('is_component')){
                $values[$locale]['locale_additional'] = getAdditional($values[$locale], array_diff(array_keys($section->componentfields['trans']), $postTransFillable) ); 
            }else{
                $values[$locale]['locale_additional'] = getAdditional($values[$locale], array_diff(array_keys($section->fields['trans']), $postTransFillable) ); 
            }  
        }
        // dd($values);
        $allOldFiles = PostFile::where('post_id', $post->id)->get();
        foreach ($allOldFiles as $key => $fil) {
            if(isset($values['old_file']) && count($values['old_file']) > 0) {
            if(!in_array($fil->id, array_keys($values['old_file']))){
                $fil->delete();
            }
            }else{
                $fil->delete();
            }
        }
        Post::find($post->id)->update($values);
        $post = Post::find($post->id); 
            Slug::where('slugable_id', $post->id)->delete();
			foreach(config('app.locales') as $locale){ 
				$post->slugs()->create([
					'fullSlug' => $locale.'/'.$post->translate($locale)->slug,
					'locale' => $locale
				]);
                // dd($post->translate($locale)->slug);
			}  
        if (isset($values['files']) && count($values['files']) > 0) {
			
            foreach($values['files'] as $key => $files){
				foreach($files['file'] as $k => $file){
					$postFile = new PostFile;
					$postFile->type = $key;
					$postFile->file = $file;
					$postFile->title = $values['files'][$key]['desc'][$k];
					$postFile->post_id = $post->id;
					$postFile->save();
				}
            }
        }
        return redirect()->route('post.list', [app()->getLocale(), $section->id,]);
    }

    protected function storePost($values, $section, $post){
        DB::beginTransaction();


            if(isset($values['icon']) && ($values['icon'] != '')){
                $newiconName = uniqid() . "." . $values['icon']->getClientOriginalExtension();
                $values['icon']->move(config('config.file_path'), $newiconName );
                $values['icon'] = '';
                $values['icon'] = $newiconName;
            }elseif(isset($values['old_icon'])){
                $values['icon'] = $values['old_icon'];
            }
            if(isset($values['cover']) && ($values['cover'] != '')){
                $newcoverName = uniqid() . "." . $values['cover']->getClientOriginalExtension();
                $values['cover']->move(config('config.file_path'), $newcoverName );
                $values['cover'] = '';
                $values['cover'] = $newcoverName;
            }elseif(isset($values['old_cover'])){
                $values['cover'] = $values['old_cover'];
            }

            if (!array_key_exists('section_id', $values) || $values['section_id'] == null) {
                $values['section_id'] = $section->id;
            }
            $values['author_id'] = auth()->user()->id;
            $postFillable = (new Post)->getFillable();
            $postTransFillable = (new PostTranslation)->getFillable();
            if (!$section->is_component) {
                $values['additional'] = getAdditional($values, array_diff(array_keys($section->fields['nonTrans']), $postFillable) );
            }else{
                $values['additional'] = getAdditional($values, array_diff(array_keys(getComponentAttribute($section->type_id)['nonTrans']), $postFillable) );
            }

            foreach(config('app.locales') as $locale){
                if(isset($values[$locale]['slug']) && $values[$locale]['slug'] !== null && $values[$locale]['slug'] !== '') {
                    $values[$locale]['slug'] = str_replace(' ', '-', $values[$locale]['slug']);
                }else{
                    if(isset($values[$locale]['title'])){
                        $values[$locale]['slug'] = str_replace(' ', '-', $values[$locale]['title']);
                    }else{
                        $values[$locale]['slug'] = str_replace(' ', '-', $values[$locale]['name']);
                    }
                }



                $i = 0;
                while (PostTranslation::where('slug', $values[$locale]['slug'])->where('locale', $locale)->when($post !== null, function ($query) use ($post){
                    // dd($post);
                            return $query->where('post_id', '!=', $post->id);
                        }, function ($query) {
                            return $query;
                        })->exists()) {
                    $values[$locale]['slug'] = $values[$locale]['slug']. '-' .$i;
                    $i++;
                }


                $pubs = [];

                // $old_pubs = [];

                if(isset($post[$locale]->locale_additional['publications']) && ($post[$locale]->locale_additional['publications'] != '')){



                    foreach($post[$locale]->locale_additional['publications'] as $key => $item){

                        $pubs[] = [

                            'name' => $item['name'],

                            'file' => $item['file']

                        ];



                    }

                }
                if (isset($values[$locale]['publications'])) {
       foreach ($values[$locale]['publications'] as $key => $pub) {

                        $originalName = $pub->getClientOriginalName();

                        $newName = $pub->getClientOriginalName() . "." . $pub->getClientOriginalExtension();

                        $pub->move(config('config.file_path'), $newName );

                        $pubs[] = [

                            'name' => $originalName,

                            'file' => $newName

                        ];

                    }
                }
                $values[$locale]['publications'] = $pubs;





                if (isset($values[$locale]['files']) && $values[$locale]['files'] !== null) {
                    foreach ($values[$locale]['files'] as $key => $files) {
                        if (array_key_exists('same',$values[$locale]['files'][$key])) {
                            foreach (config('app.locales') as $lang) {
                                if ($lang != $locale) {
                                    if (!array_key_exists($key, $values[$lang])) {
                                        $values[$lang][$key] = [];
                                    }
                                    foreach ($values[$locale]['files'][$key]['file'] as $k => $value) {
                                        $values[$lang][$key][] = [
                                            'file' => $value,
                                            'name' => $files['desc'][$k]
                                        ];
                                    }
                                }
                            }
                        }
                            $values[$locale][$key] = [];
                            foreach ($values[$locale]['files'][$key]['file'] as $k => $value) {
                                $values[$locale][$key][] = [
                                    'file' => $value,
                                    'name' => $files['desc'][$k]
                                ];
                            }


                    }
                }

            }

            foreach (config('app.locales') as $locale) {
                if (isset($values[$locale])) {
                    if (!$section->is_component) {
                        $values[$locale]['locale_additional'] = getAdditional($values[$locale], array_diff(array_keys($section->fields['trans']), $postTransFillable) );
                    }else{
                        $values[$locale]['locale_additional'] = getAdditional($values[$locale], array_diff(array_keys(getComponentAttribute($section->type_id)['trans']), $postTransFillable) );
                    }
                }
            }

            if (isset($post) && $post !== null) {

                $allOldFiles = PostFile::where('post_id', $post->id)->get();
                // dd($post);
                foreach ($allOldFiles as $key => $fil) {
                    if(isset($values['old_file']) && count($values['old_file']) > 0) {
                    if(!in_array($fil->id, array_keys ($values['old_file']))){
                        $fil->delete();
                    }
                    }else{
                    $fil->delete();
                    }

                }
                Post::find($post->id)->update($values);
                $post = Post::find($post->id);
                foreach(config('app.locales') as $locale){
                    Slug::updateOrCreate(
                        [
                            'slugable_type' => 'App\Models\Post',
                            'slugable_id' => $post->id,
                            'locale' => $locale
                        ],
                        [
                            'fullSlug' => genFullSlug($post, $locale),
                        ]
                    );
                }
            }else{
                $post = Post::create($values);
                foreach(config('app.locales') as $locale){
                    $post->slugs()->create([
                        'fullSlug' => genFullSlug($post, $locale),
                        'locale' => $locale
                    ]);
                }
            }
            if (isset($values['files']) && count($values['files']) > 0) {

                foreach($values['files'] as $key => $files){
                    foreach($files['file'] as $k => $file){
                        $postFile = new PostFile;
                        $postFile->type = $key;
                        $postFile->file = $file;
                        $postFile->title = $values['files'][$key]['desc'][$k];
                        $postFile->post_id = $post->id;
                        $postFile->save();
                    }
                }
            }
            try {

            DB::commit();
            // all good
        } catch (\Exception $e) {
            DB::rollback();
            // something went wrong
        }
    }


    public function deletefiles(Request $request) {
        // dd($request->locale);
        $post = PostTranslation::where([['post_id', $request->post_id],['locale', $request->locale]])->first();
        $publications = collect($post['locale_additional']['publications']);
        $publications->map(function ($item, $index) use ($publications, $request, $post) {
            $publications->forget($request->key);
            return $publications;
        });
        $publications = $publications->toArray();
        PostTranslation::where([['post_id', $request->post_id],['locale', $request->locale]])->update(array('locale_additional' => array('publications' => $publications)));
        $post = PostTranslation::where([['post_id', $request->post_id],['locale', $request->locale]])->first();
        return response()->json(['success' => 'File Deleted']);
    }

    public function destroy($post){

        $post = Post::where('id', $post)->first();

        $section = Section::where('id', $post->section_id)->with('translations')->first();

        $files = PostFile::where('post_id', $post->id)->get();
        foreach($files as $file){
            if(File::exists(config('config.image_path').$file->file)) {
                File::delete(config('config.image_path').$file->file);
            }
            if(File::exists(config('config.image_path').'thumb/'.$file->file)) {
                File::delete(config('config.image_path').'thumb/'.$file->file);
            }

            $file->delete();
        }

        PostTranslation::where('post_id', $post->id)->delete();
        Slug::where('slugable_id', $post->id)->where('slugable_type', 'App\Models\Post')->delete();

        $post->delete();
        return redirect()->route('post.list', [app()->getLocale(), $section->id,]);
    }









}
