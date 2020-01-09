<!DOCTYPE html>
<html>
<head>
	@include('inc.admin-header')
	<title>@yield('title') | Laravel App</title>
</head>
	<body>
		<!-- Pusher -->
		@include('inc.admin-nav')
		@include('inc.admin-sidebar')
		<div class="wrapper">
            @include('flash-message')
			@yield('content')
		</div>
		<!-- Pusher -->

		@include('inc.admin-footer')
	</body>
	</html>