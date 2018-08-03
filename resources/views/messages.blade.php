@extends('layouts.app')

@section('content')
	<h1>message</h1>
	<div class="container">
	@if(count($messages) > 0)
		@foreach($messages as $message)
			<ul class="list-group">
				<li class="list-group-item">
					Name: {{$message->name}}
				</li>
				<li class="list-group-item">
					emial: {{$message->email}}
				</li>
				<li class="list-group-item">
					message: {{$message->message}}
				</li>
			</ul>
			<br>
		@endforeach
	@endif
</div>
@endsection

@section('sidebar')
@parent
	<p>appended to the sidebar</p>
@endsection