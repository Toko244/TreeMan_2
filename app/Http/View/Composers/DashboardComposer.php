<?php

namespace App\Http\View\Composers;


use Illuminate\View\View;
use App\Models\Submission;
use App\Models\Subscribers;

class DashboardComposer
{
    public $notifications;
    public $unseenSubscribers;

    public function __construct()
    {
        $this->notifications = Submission::where('seen', 0)->with('post.parent')->orderBy('created_at', 'desc')->get();
        $this->unseenSubscribers = Subscribers::where('seen', 0)->count();
    }


    public function compose(View $view)
    {

        $view->with('notifications', $this->notifications);
        $view->with('unseenSubscribers', $this->unseenSubscribers);
    }
}
