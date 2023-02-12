<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Section;

class HomePageController extends Controller
{
        public static function homePage($model, $locales = null){
                $section= Section::where('type_id', 1)->first();
                return view('website.home', compact('section'));
	}
}
