<?php

namespace App\listeners;

use App\Events\PostViewEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class PostViewCount implements shouldQueue
{
    private $post;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\PostViewEvent  $event
     * @return void
     */
    public function handle(PostViewEvent $event)
    {
        $this->post= $event->post;
        $this->post->count +=1;
        $this->post->save();
    }
}
