<?php

namespace App\Http\View\Composers;

use App\Models\Banner;
use Illuminate\View\View;
use App\Models\Section;
class WebsiteComposer
{

    public function __construct()
    {

    }
    public function compose(View $view)
    {
        $view->with([
		]);
    }
}
