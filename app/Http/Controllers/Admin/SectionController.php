<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Section;
use App\Models\MenuSection;
use App\Models\Slug;
use App\Models\SectionTranslation;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Redirect;
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
                $values[$locale]['slug'] = SlugService::createSlug(SectionTranslation::class, 'slug', $values[$locale]['title']);
            }else{
                $values[$locale]['slug'] = SlugService::createSlug(SectionTranslation::class, 'slug', $values[$locale]['slug']);
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
                    $values[$locale]['slug'] = SlugService::createSlug(SectionTranslation::class, 'slug', $values[$locale]['title']);
                    $section->slugs()->create([
                        'fullSlug' => $locale.'/'.$values[$locale]['slug'],
                        'slugable_id' => $id,
                        'locale' => $locale
                    ]);
                }
            }else{
                if($section->translations[$key]['slug'] != $values[$locale]['slug']){
                    Slug::where('slugable_id', $id)->where('locale', $locale)->delete();
                    $values[$locale]['slug'] = SlugService::createSlug(SectionTranslation::class, 'slug', $values[$locale]['slug']);
                    
                    $section->slugs()->create([
                        'fullSlug' => $locale.'/'.$values[$locale]['slug'],
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

    public function destroy($id) {
        $sec = Section::find($id)->with('translations')->first();
        foreach(Section::find($id)->slugs()->get() as $slug){
            Slug::where('fullSlug', 'LIKE', $slug->fullSlug.'%')->delete();
        }


        Section::find($id)->slugs()->delete();
        Section::find($id)->delete();

        return redirect()->route('section.list', [app()->getLocale()]);
    }
    public function arrange(Request $request) {
        $array = $request->input('orderArr');
        Section::rearrange($array);
        return ['error' => false];
    }
}
