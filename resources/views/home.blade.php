@extends('layouts.app')

@section('content')
	<h1>home</h1>
@endsection

@section('sidebar')
@parent
	<p>appended to the sidebar</p>
@endsection