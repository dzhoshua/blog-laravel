@extends("layouts.app")

@section("content")
<div>
	<h1>{{$post->title}}</h1>
	<p>{{$post->content}}</p>
	<button><a href="/post/{{$post->id}}/edit">Редактировать</a></button>
 	<button><a href="/post/{{$post->id}}/delete">Удалить</a></button>

</div>

@endsection