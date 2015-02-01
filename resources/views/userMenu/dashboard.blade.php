<?php 
	$menuIcons = [
		'menu'		=> URL::asset('icons/menu.svg'),
		'courses'	=> URL::asset('icons/courses.svg'),
		'teaching'	=> URL::asset('icons/teachingCourses.svg'),
		'create'	=> URL::asset('icons/createCourse.svg'),
		'profile'		=> URL::asset('icons/profile.svg'),
		'wishlist'	=> URL::asset('icons/wishlist.svg')
	];


?>
@extends('layouts.base')
@section('content')
	<div class="dashboard">
		<div class="menuTitle">
			<h1>
			@yield('menuTitle', 'Menu')
			@unless(URL::current() == Url::route('menu'))
			<a href="{{{URL::previous()}}}" class="back">&laquo; tilbage</a>
			@endunless
			</h1>
			@if(URL::current() == Url::route('menu'))
			<img src="{{{$menuIcons['menu']}}}" alt="">
			@elseif(URL::current() == Url::route('myCourses'))
			<img src="{{{$menuIcons['courses']}}}" alt="">
			@elseif(URL::current() == Url::route('teachingCourses'))
			<img src="{{{$menuIcons['teaching']}}}" alt="">
			@elseif(URL::current() == Url::route('createCourse'))
			<img src="{{{$menuIcons['create']}}}" alt="">
			@elseif(URL::current() == Url::route('editProfile'))
			<img src="{{{$menuIcons['profile']}}}" alt="">
			@elseif(URL::current() == Url::route('wishlist'))
			<img src="{{{$menuIcons['wishlist']}}}" alt="">
			@endif
		</div><!-- menuTitle -->
		@yield('menuContent')
	</div><!-- dashboard -->
@stop
