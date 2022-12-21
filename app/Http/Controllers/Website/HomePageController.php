<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
	public static function homePage($model, $locales = null){
        if($locales == null){
            foreach(config('app.locales') as $locale){
                    $locales[$locale] = '/'.$locale;
            }
        }
        $model = '';
        return view('website.home', compact('model','locales'));
	}
}
