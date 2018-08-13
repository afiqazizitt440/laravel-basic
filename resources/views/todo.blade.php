@extends('layouts.app')

@section('content')
	<h1>todo</h1>
	@if(count($todos) > 0)
		@foreach($todos as $todo)
			<div class="container">
				<div class="alert alert-primary" role="alert">
					<h3><b><a href="todo/{{$todo->id}}"> {{$todo->text}}</a></b> <span class="badge badge-danger" role="">{{$todo->due}}</span></h3>
					
				</div>
			</div>
		@endforeach
	@endif
@endsection