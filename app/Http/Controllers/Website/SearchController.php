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
        $section = '';

    $searchText = $request['search'];
        $postTranlations = PostTranslation::whereActive(true)->whereLocale(app()->getLocale())
            ->where('title', 'LIKE', "%{$searchText}%")
            ->orWhere('desc', 'LIKE', "%{$searchText}%")
        ->orWhere('text', 'LIKE', "%{$searchText}%")
        ->orWhere('keywords', 'LIKE', "%{$searchText}%")
        ->orWhere('locale_additional', 'LIKE', "%{$searchText}%")->pluck('post_id')->toArray();
    $posts  = Post::whereIn('id',$postTranlations)->with('translations', 'parent', 'parent.translations')->paginate(2);
    return view('website.pages.search.index', compact('posts', 'locales','section','searchText' ));

	}
}
