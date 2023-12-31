<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

use App\Http\Controllers\Website\PagesController;
use App\Http\Controllers\Website\ContactPageController;
use Illuminate\Http\Request;
use App\Models\Slug;

class RoutesController extends Controller
{
	public function index($url)
	{
		$slug = Slug::where('fullSlug', app()->getLocale() . "/{$url}")->first();
		if($slug == ''){

			$language_slugs = '';
			return view('website.404', compact('language_slugs'));
		}
		$model = $slug->slugable()->first();
		$language_slugs = $model->getTranslatedFullSlugs();

		// dd($slug->slugable()->get());
		if ($slug->slugable_type === "App\Models\Section") {
			return PagesController::index($model, $language_slugs);
		}
		if ($slug->slugable_type === "App\Models\Post") {
			return PagesController::show($model, $language_slugs);
		}



		//  $slug = Slug::where('fullSlug', "/".app()->getLocale()."/{$url}")->first();
		// $model = $slug->slugable()->first();
		// dd($model);
		// 	$locales = null;
		// 	$localeSlugs = Slug::where('slugable_type', $slug->slugable_type)->where('slugable_id', $slug->slugable_id)->get();
		// 		if ($localeSlugs !== null) {
		// 			$locales = [];
		// 			foreach ($localeSlugs as $value) {
		// 				if (request()->has('page')) {
		// 					$locales[$value->locale] = $value->fullSlug.'?page='.request()->get('page');
		// 				}else{
		// 					$locales[$value->locale] = $value->fullSlug;
		// 				}
		// 			}
		// 		}
		//     if ($model->type_id == 5) {
		//         return ContactPageController::index($model, $locales);
		//     }
		// 	if ($slug->slugable_type === "App\Models\Section") {
		// 		return PagesController::index($model, $locales);
		// 	}
		// 	if ($slug->slugable_type === "App\Models\Post") {
		// 		return PagesController::show($model, $locales);
		// 	}

	}
}
