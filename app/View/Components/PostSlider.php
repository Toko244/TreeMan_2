<?php

namespace App\View\Components;

use App\Models\Section;
use App\Models\Post;
use Illuminate\View\Component;

class PostSlider extends Component
{
    public $components;
    public $section;
    /**
     * Create a new component instance.
     * 
     * @return void
     */
    public function __construct($sectionId)
    {
        $this->section = Section::where('id', $sectionId)->with('translation')->first();
        $this->components = Post::where('section_id', $sectionId)->whereHas('translation', function($q) {
            $q->whereActive(true)->whereLocale(app()->getLocale());
        })->with('translation')->orderBy('date', 'asc')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post-slider')->with([
            'components' => $this->components,
            'section' => $this->section,
        ]);
    }
}
