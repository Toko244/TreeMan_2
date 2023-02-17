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
use Illuminate\Support\Facades\File;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\DB;
           
class PostController extends Controller
{

    public function index($sec){
        $section = Section::where('id', $sec)->with('translations')->first();
        if (($section->type_id >= 22 && $section->type_id <= 25) || $section->type_id == 2 || $section->type_id == 5 || $section->type_id == 4 || ($section->type_id >= 30 && $section->type_id <= 32)) {
            $post = Post::where('section_id', $sec)->with(['translations', 'slugs'])->first();
            if (isset($post) && $post !== null) {
                return redirect()->route('post.edit', [app()->getLocale(), $post->id,]);
            }
            return redirect()->route('post.create', [app()->getLocale(), $sec,]);

        }

        
        $posts = Post::where('section_id', $sec)->orderBy('date', 'desc')->orderBy('created_at', 'desc')->with('translation')->get();

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
				$values[$locale]['slug'] = SlugService::createSlug(slug::class, 'slug', $values[$locale]['title']);
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
                'slug' => $values[$locale]['slug'],
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

        foreach(config('app.locales') as $key =>  $locale){
			if($values[$locale]['title'] != $post->translations[$key]['title']){
				$values[$locale]['slug'] = SlugService::createSlug(slug::class, 'slug', $values[$locale]['title']);
                Slug::where('slugable_id', $post->id)->where('locale', $locale)->delete();
                $post->slugs()->create([
                    'fullSlug' => $locale.'/'.$values[$locale]['slug'],
                    'slug' => $values[$locale]['slug'],
                    'slugable_id' => $id,
                    'locale' => $locale
                ]);
			}                        
            if($request->has('is_component')){
                $values[$locale]['locale_additional'] = getAdditional($values[$locale], array_diff(array_keys($section->componentfields['trans']), $postTransFillable) ); 
            }else{
                $values[$locale]['locale_additional'] = getAdditional($values[$locale], array_diff(array_keys($section->fields['trans']), $postTransFillable) ); 
            }  
        }
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

        if(File::exists(config('config.file_path').$post->image)) {
            File::delete(config('config.file_path').$post->image);
        }
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

        Slug::where('slugable_id', $post->id)->where('slugable_type', 'App\Models\Post')->delete();

        $post->delete();
        return redirect()->route('post.list', [app()->getLocale(), $section->id,]);
    }









}
