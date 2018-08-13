@extends('layouts.app')

@section('content')
<div class="container">
	<h1>contact</h1>
<div class="container"> 
	{!! Form::open(['url' => 'contact/submit']) !!}
    	<div class="form-group">
    		{{Form::label('name', 'name')}}
    		{{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'enter name'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('name', 'E-Mail Address')}}
    		{{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'enter email'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('message', 'message')}}
    		{{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'enter message'])}}
    	</div>
    	<div>
    		{{Form::submit('submit', ['class' => 'btn btn-primary'])}}
    	</div>
	{!! Form::close() !!}

    <a class="btn btn-primary" href="/" role="button">Link</a>
</div>
</div>
@endsection