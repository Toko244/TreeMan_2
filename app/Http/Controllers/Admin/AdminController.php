<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PostTranslation;
use App\Models\Submission;
use App\Models\Section;

class AdminController extends Controller
{

    public function index(){
        $submissions = Submission::orderBy('created_at')->limit(10)->get();

        $sections = Section::where('parent_id', null)->orderBy('order', 'asc')->with('children')->get();
        $postDrafts = PostTranslation::whereNotNull('title')->where('active', 0)->with('post.parent', 'post.author')->limit(10)->get();
        return view('admin.sections.list', compact('submissions','postDrafts', 'sections'));
    }



}
