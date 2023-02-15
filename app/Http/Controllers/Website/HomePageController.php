<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Submission;
use App\Models\Section;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class HomePageController extends Controller
{
	public static function homePage($model, $locales = null)
	{
		if (request()->method() == 'POST') {
			$values = request()->all();
			$values['additional'] = getAdditional($values, config('contactFormAttr.additional'));
			$submission = Submission::create($values);
			$data2 = 'Your Request has succsessfully been sent';
			Mail::to(settings('email'))->send(new \App\Mail\SendMail($data2));
			return redirect()->back()->with([
				'message' => trans('website.submission_sent'),
			]);
		}
		$section = Section::where('type_id', 1)->first();
		if($section){
			$language_slugs = $section->getTranslatedFullSlugs();
		}else{
			$language_slugs = '';
		}
		return view('website.home', compact('section', 'language_slugs'));
	}
}
