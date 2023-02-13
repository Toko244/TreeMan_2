<?php

namespace App\View\Components;

use App\Models\Post;
use Illuminate\View\Component;

class SubscribeBanner extends Component
{
    public $component;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    
     public function __construct($sectionId)
     {
        $this->component = Post::where('section_id', $sectionId)->whereHas('translation', function($q) {
            $q->whereActive(true)->whereLocale(app()->getLocale());
        })->with('translation')->orderBy('date', 'asc')->first();
     }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.subscribe-banner')->with([
            'component' => $this->component
        ]);
    }
}
