<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Section;

class HomePageController extends Controller
{
	public static function homePage($model, $locales = null){

        $homepage= Section::where('type_id', 0)->with('children')->first();
        if($locales == null){
            foreach(config('app.locales') as $locale){
                    $locales[$locale] = '/'.$locale;
            }
        }
        $model = '';
        return view('website.home', compact('model','locales','homepage'));
	}
}
