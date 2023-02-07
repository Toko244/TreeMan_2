<?php

namespace App\View\Components;

use App\Models\Section;
use Illuminate\View\Component;

class CounterBanner extends Component
{
    public $section;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    
     public function __construct($sectionId)
     {
         $this->section = Section::where('id', $sectionId)->whereHas('translations', function($q) {
             $q->whereActive(true)->whereLocale(app()->getLocale());
         })->with(['translation:id,section_id,title,desc', 'posts'])
         ->orderBy('order', 'asc')->orderBy('created_at', 'desc')
         ->first();
     }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.counter-banner')->with([
            'section' => $this->section
        ]);
    }
}
