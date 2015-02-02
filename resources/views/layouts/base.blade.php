<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title', 'Prudentes')</title>
		<link type="text/css" rel="stylesheet" href="{{ asset('css/styles.css') }}">
	</head>
	<body>
		<div class="wrapper">
			<div class="fullWidth header">
				<div class="sections">
					@include('layouts.logo')
					@include('layouts.siteNavigation')
				</div><!-- sections  header-->
			</div><!-- full_width header-->
			<div class="fullWidth content">
				<div class="sections">
					@yield('content')
				</div><!-- sections -->
			</div><!-- full_width content -->
		</div><!-- wrapper -->
		<div class="fullWidth  footer">
			<div class="sections">
				@include('layouts.footer')
			</div><!-- sections footer-->
		</div><!-- full_width footer-->
	</body>
	<!-- Assets -->
	<link href='http://fonts.googleapis.com/css?family=Syncopate|Ubuntu' rel='stylesheet' type='text/css'>
	<link rel="icon" href="{{{ asset('favicon.ico') }}}" type="image/x-icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="{{{ asset('js/deferVideo.js') }}}"></script>
	<script src="{{{ asset('js/smoothScroll.js') }}}"></script>
</html>