<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Submission;
use App\Models\Section;

class HomePageController extends Controller
{
        public static function homePage($model, $locales = null){
                if (request()->method() == 'POST') {
			$values = request()->all();
                        $values['additional'] = getAdditional($values, config('contactFormAttr.additional'));
			$submission = Submission::create($values);
			return redirect()->back()->with([
				'message' => trans('website.submission_sent'),
			]);
		}

                $section= Section::where('type_id', 1)->first();
		$language_slugs = $section->getTranslatedFullSlugs();
                return view('website.home', compact('section', 'language_slugs'));
	}
}
