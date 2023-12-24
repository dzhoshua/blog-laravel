<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Carbon;

class CommentController extends Controller
{

    function add() {
		return view("add_comment");
	}

    ///moderation
    function edit_comments() {
		$comments = Comment::all();
		return view("admin", ["rows" => $comments]);
	}
	
    function drop($comment) {
        $comment = Comment::find($comment);
        $comment->delete();
        ///
        return redirect('admin')->with('success', 'Комментарий удалён!');
	}
    ///

    function store($post, Request $request) {
		$request->validate([
			"nickname" => "required",
			"content" => "required"
		], [
			"nickname" => "Придумайте никнейм!",
			"content" => "Придумайте текст комментария!"
		]);

		$arr = $request;

		$comment = Comment::find($request->id) ?? new Comment;
		$comment->nickname = $arr->nickname;
		$comment->content = $arr->content;
		$comment->post_id = $post;

		$comment->save();

		return redirect('/')->with('success', 'Комментарий создан!');
	}

}
