<?php

namespace App\Http\View\Composers;

use App\Models\Banner;
use Illuminate\View\View;
use App\Models\Section;
class WebsiteComposer
{

    public function __construct()
    {
        $this->model = 0;
        $this->sections = Section::whereHas('translations', function($q) {
            $q->whereActive(true)->whereLocale(app()->getLocale());
        })
        ->whereHas('menuTypes', function($q){
            $q->where('menu_type_id', 0);
        })
		->whereHas('translations', function($q){
			$q->where('active', 1);
		})->with(array('children' => function($query) {
            $query->whereHas('menuTypes', function($q){
                $q->where('menu_type_id', 0);
            })->orderBy('order', 'asc')->orderBy('created_at', 'desc');
		}))
        ->with(['translations', 'menuTypes'])
				->where('parent_id', null)
        ->orderBy('order', 'asc')->orderBy('created_at', 'desc')
        ->get();
        $this->contact_section = Section::where('id', settings('contact_page'))
        ->with('translations', function ($q){
            $q->where('active', true);
        })
        ->first();
    }
    public function compose(View $view)
    {
        $view->with([
            // 'footer_sections' => $this->footer_sections,
			'sections' => $this->sections,
            'contact_section' => $this->contact_section,
		]);
    }
}
