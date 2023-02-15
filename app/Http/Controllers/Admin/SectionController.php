<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Section;
use App\Models\MenuSection;
use App\Models\Slug;
use App\Models\PostFile;
use Illuminate\Support\Facades\File;
use Cviebrock\EloquentSluggable\Services\SlugService;

class SectionController extends Controller
{

    /**
     * index
     *  Lists Sections
     * @return void
     */
    public function index(){
        $sections = Section::where('parent_id', null)->orderBy('order', 'asc')->with('children')->get();
        return view('admin.sections.list', compact('sections'));
    }
    public function create(){

        $sectionTypes = sectionTypes();
        $sections = Section::with('translations')->where('is_component', '!=', 1)->get();
        $menuTypes = menuTypes();
        return view('admin.sections.add', compact(['sectionTypes', 'sections', 'menuTypes']));
    }

    public function store(Request $request){
        
        $values = $request->all();
        Validator::validate($values, [
            'type_id' => 'required',
        ]);
        $values['additional'] = getAdditional($values, config('sectionAttr.additional'));
        foreach(config('app.locales') as $locale){
            if($request->has('is_component')){
                $values[$locale]['slug'] = SlugService::createSlug(slug::class, 'slug', $values[$locale]['title']);
            }else{
                $values[$locale]['slug'] = SlugService::createSlug(slug::class, 'slug',  $values[$locale]['slug']);
            }
            $fullslug[$locale] = $locale.'/'.$values[$locale]['slug'];
            $values[$locale]['locale_additional'] = getAdditional($values[$locale], config('sectionAttr.translateable_additional'));
        }
        $values['order'] = Section::max('id');
        $section = Section::create($values);
		if (isset($values['menu_types']) && $values['menu_types'] !== null) {
			foreach($values['menu_types'] as $type){
				MenuSection::create([
					'section_id' => $section->id,
					'menu_type_id' => $type
				]);
			}
		}
        
        foreach(config('app.locales') as $locale){
            $section->slugs()->create([
                'fullSlug' => $fullslug[$locale],
                'slug' => $values[$locale]['slug'],
                'slugable_id' => $section->id,
                'locale' => $locale
            ]);
        }
        if($request->has('is_component')){
            return redirect()->route('components.list', [app()->getLocale(), $values['parent_id']]);
        }else{
            return redirect()->route('section.list', [app()->getLocale()]);
        }
    }

    public function edit($id){
        $sectionTypes = sectionTypes();
        $section = Section::where('id', $id)->with(['translations', 'menuTypes'])->first();
        $sections = Section::with('translations')->where('id', '!=', $section->id)->where('parent_id', '!=', $section->id)->orWhere('parent_id', null)->get();
        $menuTypes = menuTypes();
        return view('admin.sections.edit', compact(['sections', 'section', 'sectionTypes', 'menuTypes']));
    }

    public function update($id, Request $request){
        $values = $request->all();
        Validator::validate($values, [
            'type_id' => 'required'
        ]);
        $section = Section::where('id', $id)->with('translations')->first();
        MenuSection::where('section_id', $id)->delete();
        // Slug::where('slugable_id', $id)->delete();

        $values['additional'] = getAdditional($values, config('sectionAttr.additional'));
        foreach(config('app.locales') as $key => $locale){
            if($request->has('is_component')){
                if($section->translations[$key]['title'] != $values[$locale]['title']){
                    Slug::where('slugable_id', $id)->where('locale', $locale)->delete();
                    $values[$locale]['slug'] = SlugService::createSlug(slug::class, 'slug', $values[$locale]['title']);
                    $section->slugs()->create([
                        'fullSlug' => $locale.'/'.$values[$locale]['slug'],
                        'slug' => $values[$locale]['slug'],
                        'slugable_id' => $id,
                        'locale' => $locale
                    ]);
                }
            }else{
                if($section->translations[$key]['slug'] != $values[$locale]['slug']){
                    Slug::where('slugable_id', $id)->where('locale', $locale)->delete();
                    $values[$locale]['slug'] = SlugService::createSlug(slug::class, 'slug', $values[$locale]['slug']);
                    
                    $section->slugs()->create([
                        'fullSlug' => $locale.'/'.$values[$locale]['slug'],
                        'slug' => $values[$locale]['slug'],
                        'slugable_id' => $id,
                        'locale' => $locale
                    ]);
                }
            }

            $values[$locale]['locale_additional'] = getAdditional($values[$locale], config('sectionAttr.translateable_additional'));
        }
        $section = Section::find($id)->update($values);

        if (isset($values['menu_types']) && $values['menu_types'] !== null) {
            foreach($values['menu_types'] as $type){
                MenuSection::create([
                    'section_id' => $id,
                    'menu_type_id' => $type
                ]);
            }
        }

        if($request->has('is_component')){
            return redirect()->route('components.list', [app()->getLocale(), $values['parent_id']]);
        }else{
            return redirect()->route('section.list', [app()->getLocale()]);
        }
    }
    public function arrange(Request $request) {
        $array = $request->input('orderArr');
        Section::rearrange($array);
        return ['error' => false];
    }

    public function destroy($id) {

        $section = Section::where('id',$id)->with('translations','posts')->first();
        if(count($section->sectioncomponents()) > 0){
            foreach($section->sectioncomponents() as $key => $component){
                if(count($component->posts) > 0){
                    foreach($component->posts as $key => $component_post){
                        
                        if(isset($component_post->image) && File::exists(config('config.file_path').$component_post->image)) {
                            File::delete(config('config.file_path').$component_post->image);
                        }
                        $files = PostFile::where('post_id', $component_post->id)->get();
                        foreach($files as $file){
                            if(File::exists(config('config.image_path').$file->file)) {
                                File::delete(config('config.image_path').$file->file);
                            }
                            if(File::exists(config('config.image_path').'thumb/'.$file->file)) {
                                File::delete(config('config.image_path').'thumb/'.$file->file);
                            }
                            $file->delete();
                        }
                        $component_post->slugs()->delete();
                        // Slug::where('slugable_id', $component_post->id)->where('slugable_type', 'App\Models\Post')->delete();
                    }
                }
                $component->slugs()->delete();
            }
        }

        
        if(count($section->posts) > 0){
            foreach($section->posts as $key => $post){
                
                if(isset($post->image) && File::exists(config('config.file_path').$post->image)) {
                    File::delete(config('config.file_path').$post->image);
                }
                    $files = PostFile::where('post_id', $post)->get();
                    if($files){
                        foreach($files as $file){
                            if(File::exists(config('config.image_path').$file->file)) {
                                File::delete(config('config.image_path').$file->file);
                            }
                            if(File::exists(config('config.thumb_path').'thumb/'.$file->file)) {
                                File::delete(config('config.thumb_path').'thumb/'.$file->file);
                            }
                            $file->delete();
                        }
                    }
                    $post->slugs()->delete();
            }
        }

        $section->slugs()->delete();
        $section->delete();

        return redirect()->route('section.list', [app()->getLocale()]);
    }
}
