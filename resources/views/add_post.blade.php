@extends("layouts.app")

@section("content")
<h2>Добавление поста</h2>
<form method="POST" action="">

	@csrf

	<div>
		<label for="title"><div>Тема:</div></label>
			<input type="text" name="title">
			@error("title")
				<span>{{ $message }}</span>
			@enderror
	</div>

	<div>
		<label for="content"><div>Содержание:</div></label>
			<textarea name="content"></textarea>
			@error("content")
				<span>{{ $message }}</span>
			@enderror
	</div>
	<div>
		<label for="publish_at"><div>Публикация (если не указано, публикуется сразу):</div></label>
			<input type="datetime-local" name="publish_at"></input>
			@error("publish_at")
				<span>{{ $message }}</span>
			@enderror
	</div>
	
	<button type="submit">Создать</button>
</form>
@endsection