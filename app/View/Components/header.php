<?php

namespace App\View\Components;

use App\Models\Section;
use Illuminate\View\Component;

class header extends Component
{
    public $sections;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
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
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header')->with([
            'sections' => $this->sections
        ]);
    }
}
