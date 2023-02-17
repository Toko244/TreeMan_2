<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostTranslation;
use App\Models\Post;

class SearchController extends Controller
{
    public static function index(Request $request){
		
        
		$language_slugs['en'] = 'en/search';
		$language_slugs['ka'] = 'ka/search';
		$language_slugs['tr'] = 'tr/search';

		$validatedData = $request->validate([
			'que' => 'required',
		]);
		$searchText = $validatedData['que'];
		$postTranlations = PostTranslation::whereActive(true)->whereLocale(app()->getLocale())
			->where('title', 'LIKE', "%{$searchText}%")
			->orWhere('desc', 'LIKE', "%{$searchText}%")
			->orWhere('text', 'LIKE', "%{$searchText}%")
			->orWhere('keywords', 'LIKE', "%{$searchText}%")
			->orWhere('locale_additional', 'LIKE', "%{$searchText}%")->pluck('post_id')->toArray();
		$posts  = Post::whereIn('id', $postTranlations)->with('translations', 'parent', 'parent.translations')->paginate(settings('paginate'));
		
		$data = [];
		foreach ($posts as $post) {
			$data[] = [
				'slug' => $post->getFullSlug() ?? '#',
				'title' => $post->translate(app()->getLocale())->title,
				'desc' => str_limit(strip_tags($post->translate(app()->getLocale())->desc)),
			];
		}
dd($data);
		return view('website.pages.search.index', compact('posts','data', 'language_slugs'));

	}
    public static function search(Request $request)
	{

		$language_slugs['ka'] = 'ka/search?que='.$request->que;
		$language_slugs['en'] = 'en/search?que='.$request->que;
		$language_slugs['ru'] = 'ru/search?que='.$request->que;
		$validatedData = $request->validate([
			'que' => 'required',
		]);

		$searchText = $validatedData['que'];
		
		$posts = Post::whereNotNull('section_id')->whereHas('translations', function ($q) use($searchText){
            $q->where('locale', app()->getLocale())->where('active', true);

            if ($searchText && strlen($searchText) > 0) {
                $q->where('title', 'like', '%' . strtolower($searchText) . '%')
                    ->orWhere('desc', 'like', '%' . strtolower($searchText) . '%')
                    ->orWhere('text', 'like', '%' . strtolower($searchText) . '%')
                    ->orWhere('keywords', 'like', '%' . strtolower($searchText) . '%')
                    ->orWhere('locale_additional', 'like', '%' . strtolower($searchText) . '%');
            }
        })->with('parent')->paginate(settings('paginate'));
		$SectionTranlations = SectionTranslation::whereActive(true)->whereLocale(app()->getLocale())
			->where('title', 'LIKE', "%{$searchText}%")
			->orWhere('locale_additional', 'LIKE', "%{$searchText}%")->pluck('section_id')->toArray();
			
			$pages  = Section::whereIn('id', $SectionTranlations)->with('translations', 'parent','children' , 'parent.translations')
			->where('type_id' ,'!=' , '3' )
			->paginate(settings('paginate'));
		return view('website.pages.search.index', compact('posts', 'language_slugs', 'searchText','pages'));
	}
}
