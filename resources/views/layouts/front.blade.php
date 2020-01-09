<!DOCTYPE html>
<html>
<head>
	@include('inc.header')
	<title>@yield('title') | Laravel App</title>
</head>
	<body>
		<!-- Pusher -->
		@include('inc.nav')
		<div class="wrapper">
			@yield('content')
		</div>
		<!-- Pusher -->
		@include('inc.footer')
	</body>
	</html>