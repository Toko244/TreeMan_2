<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostTranslation;
use App\Models\Post;
use DB;

class SearchController extends Controller
{
	public static function index(Request $request)
	{

		$language_slugs['en'] = 'en/search';
		$language_slugs['ka'] = 'ka/search';
		$language_slugs['tr'] = 'tr/search';
if($request->que != ''){
	$searchText = $request->que;

	$posts = Post::whereNotNull('section_id')->whereHas('translations', function ($q) use ($searchText) {
		$q->where('locale', app()->getLocale())->where('active', true);
		$q->where('title', 'like', '%' . strtolower($searchText) . '%')
			->orWhere('desc', 'like', '%' . strtolower($searchText) . '%')
			->orWhere('text', 'like', '%' . strtolower($searchText) . '%')
			->orWhere('keywords', 'like', '%' . strtolower($searchText) . '%')
			->orWhere('locale_additional', 'like', '%' . strtolower($searchText) . '%');
	})->whereHas('parent', function ($q) {
		$q->where('is_component', '!=', 1);
	})->with('parent')->with('translation')->get();
	$data = [];
	foreach ($posts as $post) {
		$data[] = [
			'slug' => $post->parent->translate(app()->getLocale())->slug,
			'title' => $post->translate(app()->getLocale())->title,
			'desc' => str_limit(strip_tags($post->translate(app()->getLocale())->desc)),
			'section' => $post->parent->translate(app()->getLocale())->title,
		];
	}
	$section = [];
	return view('website.pages.search.index', compact('posts', 'section','searchText', 'data', 'language_slugs'));
}else{
	$posts = [];
	$data = [];
	$section = [];
	$searchText = '';
	return view('website.pages.search.index', compact('posts', 'section','searchText', 'data', 'language_slugs'));
}


	}
}
