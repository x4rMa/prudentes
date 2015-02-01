<?php 
	$menuPage = [
		[	'description'	=> 'Her kan du se de kurser du har tilføjet til din samling, har købt eller er blevet inviteret til.',
			'button'		=> 'Mine kurser',
			'link'		=> route('myCourses'),
			'icon'		=> asset('icons/courses.svg')
		],
		[	'description'	=> 'Hvis du har oprettet et eller flere af dine egne kurser, kan du se og rette dem her.',
			'button'		=> 'Udgivne kurser',
			'link'		=> route("teachingCourses"),
			'icon'		=> asset('icons/teachingCourses.svg')
		],
		[	'description'	=> 'Her kan du oprette dit eget prudentes kursus. Du finder også hjælp til hvordan du nemt laver et video kursus, samt hvordan du opfylder vores kvalitetskrav.',
			'button'		=> 'Opret kursus',
			'link'		=> route("createCourse"),
			'icon'		=> asset('icons/createCourse.svg')
		],
		[	'description'	=> 'Her kan du tilføje dit rigtige navn, alder, adresse osv. Du kan også ændre din email, password og mere til.',
			'button'		=> 'Opdater profil',
			'link'		=> route("editProfile"),
			'icon'		=> asset('icons/profile.svg')
		],
		[	'description'	=> 'Hvis du har tilføjet kurser til din ønskeliste, finder du dem her.',
			'button'		=> 'Min ønskeliste',
			'link'		=> route('wishlist'),
			'icon'		=> asset('icons/wishlist.svg')
		]
	];
	 ?>
@extends('userMenu.dashboard')
@section('title')
	Min Menu | Prudentes
@stop
@section('menuTitle')
	Min Menu
@stop
@section('menuContent')
<div class="menu">
	@foreach($menuPage as $page)
	<div class="menuItem">
		<div class="menuDescription">
			<div class="menuIcon"><img src="{{{$page['icon']}}}" alt=""></div>
			<p>{{{$page['description']}}}</p>
		</div><!-- menuDescription -->
		<a href="{{{$page['link']}}}"><span class="menuButton">{{{$page['button']}}}</span></a>
	</div><!-- menuItem -->
	@endforeach	
</div><!-- menu -->
@stop