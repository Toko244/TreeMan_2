<?php

namespace App\Http\Controllers\Website;

use App\Models\Section;
use App\Models\Post;
use App\Http\Controllers\Controller;
class PagesController extends Controller
{
	public static function index($model, $locales){
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
