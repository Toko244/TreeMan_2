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
        $section = Section::where('id', $id)->first();
        $components = Section::where('is_component', '!=', 0)->where('parent_id', $id)->orderBy('order', 'asc')->with('children')->get();
        return view('admin.components.list', compact('components', 'id', 'section'));
    }
    public function create($id){
        $section = Section::where('id', $id)->first();
        return view('admin.components.add', compact(['section']));
    }
    public function edit($id){
        $section = Section::where('id', $id)->with(['translations', 'menuTypes'])->first();
        $sections = Section::with('translations')->where('id', '!=', $section->id)->where('parent_id', '!=', $section->id)->orWhere('parent_id', null)->get();
        return view('admin.components.edit', compact(['sections', 'section']));
    }
    public function post($id){
        $section = Section::where('id', $id)->first();
        $components = Section::where('is_component', '!=', 0)->where('parent_id', $id)->orderBy('order', 'asc')->with('children')->get();
        return view('admin.components.list', compact('components', 'id', 'section'));
    }
}
