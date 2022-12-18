<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
class PagesController extends Controller
{
	public static function index($model, $locales){
        if ($model == null) {
            return self::homePage($model, $locales)->with('message', trans('admin.info_not_added'));
        }
        $section = $model;
        $posts = Post::where('section_id', $model->id)
        ->with('translation', function($q){
			$q->where('active', 1)->where('locale', app()->getlocale());
        })->orderBy('date', 'desc')->paginate($model->type['paginate']?? 6); 
        return view("website.pages.{$model->type['folder']}.index", compact('section', 'posts', 'locales' ));

    }

	public static function show($model, $locales){ 
        if ($model == null) {
            return self::homePage($model, $locales)->with('message', trans('admin.info_not_added'));
        }
        $section = $model->parent()->first();
        $post = Post::where('posts.id', $model->id)
        ->join('post_translations', 'posts.id', '=', 'post_translations.post_id')
        ->where('post_translations.locale', '=', app()->getLocale())
        ->select('posts.*', 'post_translations.text', 'post_translations.desc', 'post_translations.title', 'post_translations.locale_additional', 'post_translations.slug')
        ->with('files')->first();

        return view("website.pages.{$section->type['folder']}.show", [
            'section' => $section, 
            'post' => $model, 
            'locales' => $locales
            ])->render();
	}

	public static function homePage($model, $locales = null){
        if($locales == null){
            foreach(config('app.locales') as $locale){
                    $locales[$locale] = '/'.$locale;
            }
        }
        $model = '';
        return view('website.home', compact('model','locales'));
	}

    public static function search(Request $request){
        $locales = [];
        foreach (config('app.locales') as $value) {
            $locales[$value] =  '/'.$value;
        }
        $section = Section::where('type_id', 1)->with('translations')->first();
// dd($section->getfullslug());
    $searchText = $request['search'];

        $postTranlations = PostTranslation::whereActive(true)->whereLocale(app()->getLocale())
            ->where('title', 'LIKE', "%{$searchText}%")
            ->orWhere('desc', 'LIKE', "%{$searchText}%")
        ->orWhere('text', 'LIKE', "%{$searchText}%")
        ->orWhere('keywords', 'LIKE', "%{$searchText}%")
        ->orWhere('locale_additional', 'LIKE', "%{$searchText}%")->pluck('post_id')->toArray();
    $posts  = Post::whereIn('id',$postTranlations)->with('translations', 'parent', 'parent.translations')->paginate(2);
    // dd($posts);
    return view('website.pages.search.index', compact('posts', 'locales','section','searchText' ));

	}
    public static function contact($model, $locales){
        $section = $model->parent()->first();

        $post = Post::where('posts.id', $model->id)
        ->join('post_translations', 'posts.id', '=', 'post_translations.post_id')
        ->where('post_translations.locale', '=', app()->getLocale())
        ->select('posts.*', 'post_translations.text', 'post_translations.desc', 'post_translations.title', 'post_translations.locale_additional', 'post_translations.slug')
        ->with('files')->first();

        return view("website.pages.contact.show", [
            'section' => $section,
            'post' => $post,
            'locales' => $locales
            ])->render();
    } 
}
