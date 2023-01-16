<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Banner;

class HomePageController extends Controller
{
	public static function homePage($model, $locales = null){
        if($locales == null){
            foreach(config('app.locales') as $locale){
                    $locales[$locale] = '/'.$locale;
            }
        }
        $main_banner_slider = Banner::where('type_id', bannerTypes()['main_banner_slider']['id'])
        ->with('translation', function($que){
            $que->where('locale', app()->getlocale())
            ->where('active', true);
        })->orderBy('date', 'desc')->get();
        $model = '';
        return view('website.home', compact('model','locales','main_banner_slider'));
	}
}
