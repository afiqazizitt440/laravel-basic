@extends('layouts.app')
@include('inc.cdn')

<div class="container">

	@section('content')
		<a class="btn btn-default" href="/">go back</a>
		<h3>{{$todo->text}}</h3>
		<!-- <h3><a href="todo/{{$todo->id}}"><b>{{$todo->text}}</b></a> <span class="badge badge-danger" role="">{{$todo->due}}</span></h3>
		<p>{{$todo->body}}</p> -->
	@endsection

</div>