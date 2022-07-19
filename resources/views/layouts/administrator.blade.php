@extends('layouts.default')

<style>

</style>
@section('content')

	<table>
		<tr>
			<th>ID</th>
			<th>お名前</th>
			<th>性別</th>
			<th>メールアドレス</th>
			<th>ご意見</th>
		</tr>
			@foreach($todos as $todo)
				<tr>
					<td>
						{{ $todo->id }}
					</td>
					<td>
						{{ $todo->name }}
					</td>
					<td>
						{{ $todo->email }}
					</td>
					<td>
						{{ $todo->opinion }}
					</td>
					<td>
						<form action="{{ route('administrator.delete', ['id' => $todo->id]) }}" method="post">
							@csrf
							<button class="button-delete">削除</button>
						</form>
					</td>
				</tr>
				@endforeach
		</table>