<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Section;

class ComponentsController extends Controller
{

    /**
     * index
     *  Lists Sections
     * @return void
     */
    public function index($id){
        $components = Section::where('component', '!=', 0)->where('parent_id', $id)->orderBy('order', 'asc')->with('children')->get();
        return view('admin.components.list', compact('components', 'id'));
    }
    public function create($id){
        $section = Section::where('id', $id)->first();
        $sectionTypes = sectionTypes();
        $componentTypes = componentTypes();
        $component = $componentTypes['bannerSlider'];
        return view('admin.components.add', compact(['section','componentTypes', 'sectionTypes', 'component']));
    }
}
