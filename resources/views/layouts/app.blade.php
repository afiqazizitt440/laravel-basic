<!DOCTYPE html>
<html>
<head>
	<title>All in website</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	@include('inc.navbar')

	@if(Request::is('/'))
	<div class="container">
		@include('inc.showcase')
	</div>
	@endif
	
	<div class="row">
		<div class="col-md-8 col-md-8">
			@include('inc.messages')
			@yield('content')
		</div>
		<div class="col-md-4 col-md-4">
			@include('inc.sidebar')
		</div>
		
	</div>
	
	<footer id="footer" class="text-center">
		afiq second
	</footer>

	
</body>
</html>