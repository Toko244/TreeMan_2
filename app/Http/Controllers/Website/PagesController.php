<?php

namespace App\Http\Controllers\Website;

use App\Models\Section;
use App\Models\Post;
use App\Models\Submission;
use App\Http\Controllers\Controller;
class PagesController extends Controller
{
	public static function index($model, $language_slugs){
        if (request()->method() == 'POST') {
			$values = request()->all();
            $values['additional'] = getAdditional($values, config('contactFormAttr.additional'));
			$submission = Submission::create($values);
			return redirect()->back()->with([
				'message' => trans('website.submission_sent'),
			]);
		}
        
		if ($model->type_id == 1) {
            $section= Section::where('type_id', 1)->first();
            return view('website.home', compact('section', 'language_slugs'));
		}
		if ($model->type_id == 2) {
            $section = Section::where('id', $model->id)->with('translation')->first();
            return view('website.text-page', compact('section', 'language_slugs'));
		}
        
		if ($model->type_id == 3) {
            $section = Section::where('id', $model->id)->with('translation')->first();
            return view('website.photo-video', compact('section', 'language_slugs'));
		}
        
		if ($model->type_id == 4) {
            $section = Section::where('id', $model->id)->with('translation')->first();
            return view('website.contact', compact('section', 'language_slugs'));
		}
        $section = Section::where('id', $model->id)
        ->with('posts', function($q){
            $q->whereHas('translations', function($que){
                $que->where('locale', app()->getlocale())
                ->where('active', true);
            }) ->orderBy('date', 'desc')->paginate($model->type['paginate']?? 6);
        })->first();
        return view("website.pages.{$model->type['folder']}.index", compact('section', 'locales' ));

    }

	public static function show($model, $locales){
        $post = Post::where('id', $model->id)
        ->whereHas('translations', function($que){
            $que->where('locale', app()->getlocale())
            ->where('active', true);
        })
        ->with('files')
        ->first();
        return view("website.pages.{$model->parent->type['folder']}.show", [
            'post' => $post,
            'locales' => $locales
            ])->render();
	}

    public function front(){
        return view('website.front');
    }
}
