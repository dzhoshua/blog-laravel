@extends("layouts.app")

@section("content")
<h2>Редактирование поста</h2>

<form method="POST" action="">
	@csrf

	<input type="hidden" name="id" value="{{ $post->id }}">

	<div>
		<label for="title"><div>Тема:</div></label>
		<input type="text" name="title" value="{{ old('title') ?? $post->title }}">
		@error("title")
			<span>{{ $message }}</span>
		@enderror
	</div>

	<div>
		<label for="content"><div>Содержание:</div></label>
		<textarea name="content" >{{ $post->content }}</textarea>
		@error("content")
			<span>{{ $message }}</span>
		@enderror
	</div>
	<button type="submit">Сохранить</button>
	<button type="cancel">Отменить</button>
</form>
@endsection