<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostTranslation;
use App\Models\Post;

class SearchController extends Controller
{
    public static function index(Request $request){
        $locales = [];
        foreach (config('app.locales') as $value) {
            $locales[$value] =  '/'.$value;
        }
    $posts  = PostTranslation::Filter($request)->get();
    return view('website.pages.search.index', compact('posts', 'locales'));

	}
}
