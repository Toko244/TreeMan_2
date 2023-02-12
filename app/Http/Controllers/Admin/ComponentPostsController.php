<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Section;

class ComponentPostsController extends Controller
{

    /**
     * index
     *  Lists Sections
     * @return void
     */
    public function index($id){
        $section = Section::where('id', $id)->orderBy('order', 'asc')->first();
        $posts = Post::where('section_id', $id)->orderBy('date', 'desc')->get();
        return view('admin.componentposts.list', compact('posts', 'section'));
    }
    public function create($sec){
        $componentType = componentTypes();
        $section = Section::where('id', $sec)->with('translations')->first();
        return view('admin.componentposts.add', compact(['section', 'componentTypes']));
    }


}
