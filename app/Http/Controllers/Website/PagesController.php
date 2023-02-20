<?php

namespace App\Http\Controllers\Website;

use App\Models\Section;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use App\Models\PostFile;
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
			$data2 = 'Your Request has succsessfully been sent';
			Mail::to(settings('email'))->send(new \App\Mail\SendMail($data2));
			return redirect()->back()->with([
				'message' => trans('website.submission_sent'),
			]);
		}
		if ($model->type_id == 1) {
            $section= Section::where('id', $model->id)->first();
            return view('website.home', compact('section', 'language_slugs'));
		}
		if ($model->type_id == 2) {
            $section = Section::where('id', $model->id)->with('translation')->first();
            $post = $section->sectionPost();
            return view('website.text-page', compact('section','post','language_slugs'));
		}
        
		if ($model->type_id == 3) {
            $model->load('translation', 'posts.translation');
            $files = PostFile::whereIn('post_id', $model->posts->pluck('id'))->paginate(settings('gallery_pagination'));
            return view('website.photo-video', compact('model', 'language_slugs','files'));
		}
        
		if ($model->type_id == 4) {
            $section = Section::where('id', $model->id)->with('translation')->first();
            return view('website.contact', compact('section', 'language_slugs'));
		}
		if ($model->type_id == 5) {
            $section = Section::where('id', $model->id)->with('translation')->first();
            $post = $section->sectionPost();
            $components = Section::where([['is_component', true],['parent_id', $section->id]])->select('type_id','id')->paginate(settings('list_pagination'));
            // $components = $section->components();
            return view('website.list-page', compact('section','post','components', 'language_slugs'));
		}
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
