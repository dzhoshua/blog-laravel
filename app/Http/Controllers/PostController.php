<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Events\PostPublished;
use App\Events\PostDeleted;
use Carbon\Carbon;

class PostController extends Controller
{
    function index() {
		$posts = Post::where(function ($query) {
            $query->whereNull('publish_at')
                ->orWhere('publish_at', '<=', Carbon::now());
        })->where('published', true)->get();

		$comments = Comment::all();
		return view("blog", ["posts" => $posts], ["comments" => $comments]);
	}

    function add() {
		return view("add_post");
	}

	function post($post) {
		$post = Post::find($post);
		return view("post", ["post" => $post]);
	}
    function edit($post) {
		$post = Post::find($post);
		return view("edit_post", ["post" => $post]);
	}

    function store(Request $request) {
		$request->validate([
			"title" => "required",
			"content" => "required",
            "publish_at" => "nullable|date",
		], [
			"title" => "Придумайте название поста!",
			"content" => "Придумайте текст поста!"
		]);

		$arr = $request;

		$post = Post::find($arr->id) ?? new Post;
		$post->title = $arr->title;
		$post->content = $arr->content;
		$post->publish_at = $arr->publish_at;

		if ($post->publish_at == null || $post->publish_at <= now()) {
            $post->publish_at = now();
			$post->published =  true;

			event(new PostPublished($post));
		}
		$post->save();

		return redirect('/')->with('success', 'Пост создан!');
	}

    function drop($post) {
	
		$post = Post::find($post);
		$comments = Comment::all();
		foreach ($comments as $comment) {
			if ($comment->post_id == $post->id)
				$comment->delete();
		}
		event(new PostDeleted($post));

		$post->delete();
		
		return redirect('/')->with('success', 'Пост удалён!');
	}

}
