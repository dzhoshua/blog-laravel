<?php

namespace App\Listeners;

use App\Events\PostPublished;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SentPostPublished
{

    /**
     * Handle the event.
     */
    public function handle(PostPublished $event): void
    {
        Log::info('NEW PUBLISHED POST: ' . $event->post->title;);
    }
}
