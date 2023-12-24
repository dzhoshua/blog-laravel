<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;
use Carbon\Carbon;

class PublishPosts extends Command
{
    protected $signature = 'publish:posts';
    protected $description = 'Publish content automatically';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info('Checking and publishing scheduled posts...');

        $posts = Post::where('published', false)
                     ->where('publish_at', '<=', now())
                     ->get();

        foreach ($posts as $post) {
            $post->published = true;
            $post->save();
            $this->info("Post '{$post->title}' published at {$post->publish_at}");
        }

        $this->info('Posts published successfully.');
    }
}