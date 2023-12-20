@extends("layouts.app")

@section("content")
<h1>Добавление комментария</h1>
<form method="POST" action="">

	@csrf

	<div>
		<label for="nickname"><div>Никнейм:</div></label>
			<input type="text" name="nickname">
			@error("title")
				<span>{{ $message }}</span>
			@enderror
	</div>

	<div>
		<label for="content"><div>Комментарий:</div></label>
			<textarea name="content"></textarea>
			@error("text")
				<span>{{ $message }}</span>
			@enderror
	</div>
	<button type="submit">Сохранить</button>
</form>
@endsection