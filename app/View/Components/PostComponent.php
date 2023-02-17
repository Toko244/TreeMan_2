<?php

namespace App\View\Components;

use App\Models\Section;
use App\Models\Post;
use Illuminate\View\Component;

class PostComponent extends Component
{
    public $components;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    
     public function __construct($sectionId)
     {
        $this->components = Post::where('section_id', $sectionId)->whereHas('translation', function($q) {
            $q->whereActive(true)->whereLocale(app()->getLocale());
        })->with('translation')->orderBy('date', 'desc')->get();
     }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post-component')->with([
            'components' => $this->components
        ]);
    }
}
