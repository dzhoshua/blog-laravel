@extends("layouts.app")

@section("content")
<h1>Пользователи</h1>
<table>
<tr>
	<th>Никнейм</th>
	<th>Комментарий</th>
	<th>Удалить</th>
</tr>
@foreach ($rows as $row)
	<tr>
		<td>{{$row->nickname}}</a></td>
		<td>{{$row->content}}</td>
     		<td><b><a href="/admin/{{$row->id}}/delete">x</a></b></td>
	</tr>
@endforeach
</table>

@endsection