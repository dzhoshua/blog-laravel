@extends('layouts.app')

@section('content')
<h2>Мой блог</h2>
<button><a href="/post/add">Создать новый пост</a></button>

@foreach ($posts as $post)
<div class="cont">
    <h3><a href="/post/{{ $post->id }}"><b>{{$post->title}}</b></a></h3>
    <p>{{$post->content}}</p>
    <hr/>
    
    <button><a href="/post/{{ $post->id }}/comment/add">Написать комментарий</a></button>
    
    @foreach ($comments as $comment)
        @if ($comment->post_id == $post->id)
		<p><b>{{$comment->nickname}}</b></p>
		<p>{{$comment->content}}</p>
        @endif
    @endforeach
</div>


@endforeach

@endsection