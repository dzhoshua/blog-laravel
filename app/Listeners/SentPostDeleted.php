<?php

namespace App\Listeners;

use App\Events\PostDeleted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SentPostDeleted
{
    
    /**
     * Handle the event.
     */
    public function handle(PostDeleted $event): void
    {
        Log::info('THIS POST WAS DELETED: ' . $event->post->title;);
    }
}
