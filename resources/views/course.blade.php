<?php 
use prudentes\Clean;
?>
@extends('layouts.base')
@section('title')
{{{$course}}} | Prudentes
@stop

@section('content')
<div class="course">
	<div class="courseHeader">
		<a href="{{{URL::previous()}}}" class="back">&laquo;Tilbage</a>
		<h1>{{$course}} </h1>
		<p>"Lær hvordan du sparer penge og tid ved at lave din cykel selv frem for at sende den til cykelsmeden."</p>
		<div class="courseFacts">
			<table>
				<!-- 
				<tr>
					<td><span class="price">Pris</span></td>
					<td><span class="price">995kr</span></td>
				</tr>
				<tr>
					<td>Permanent adgang?</td>
					<td>Ja!</td>
				</tr>
				<tr>
					<td>Tilfredshedsgaranti?</td>
					<td>Ja! Ikke tilfreds? Få hver en øre tilbage indenfor 30 dage efter købet <a href="">(Se hvordan)</a></td>
				</tr>
				-->
				<tr>
					<td>Antal lektioner</td>
					<td>16</td>
				</tr>
				<tr>
					<td>Længde</td>
					<td>ca. 1t 36min</td>
				</tr>
			</table>
		</div><!-- courseFacts -->
		<div class="courseButtons">
			<!--
			<a href="{{{ route('index') }}}"><span class="down">Køb</span></a>
			<a href="{{{ route('wishlist') }}}"><span class="down">Føj til ønskeliste</span></a>
			-->
			
			<a href="{{{ route('myCourses') }}}"><span class="down">Tag kursus (gratis)</span></a>
			<a href="#indhold"><span class="down">Se indholdet</span></a>
		</div><!-- courseButtons -->
	</div><!-- courseHeader -->

	<div class="courseIntro filler">
		<div class="courseDescription filler">
			<h2>Intro</h2>
			<iframe width="510" height="265" src="" data-src="//www.youtube.com/embed/YTpBVMHKjc4" frameborder="0" allowfullscreen class="courseIntroVideo"></iframe>
			<p >Dette kursus vil lære dig absolut alt om hvordan du fikser din cykel. Vi gennemgår alt lige fra at finde ud af hvilke reserve dele du skal bruge, til at få dem bestilt hjem og sat på cyklen. Slut med at betale overpris til cykelsmeden!</p>

		</div><!-- courseDescription -->
		<div class="teacherDescription">
			<h2>Mød læreren</h2>
			<img src="{{{ asset('profilePicture.jpg') }}}" alt="Picture of this course's teacher" class="teacherImage">
			<p>Hej med dig! Mit navn er Lars, og jeg elsker alt der har med cykler at gøre! Jeg har cyklet siden jeg var 10år, og har skabt mit levebrød ved at lave og sælge cykler. Jeg håber at kunne lære dig en ting eller to om god, billig og effektiv cykel reperation!</p>
		</div><!-- teacherDescription -->
	</div><!-- courseIntro -->
	
	<div class="targetUser filler">
	<h2>Dette kursus er for dig hvis du...</h2>
	<img src="{{{ asset('cykel.jpg') }}}" alt="Description of course banner">
	<ul>
		<li>Elsker at cykler!</li>
		<li>Gerne vil sparer penge på cykelreperationen.</li>
		<li>Godt kan lide at skille og samle ting.</li>
		<li>Overvejer at arbejde med cykler i fremtiden.</li>
	</ul>
	</div><!-- targetUser -->




	<div class="prerequisites filler">
		<h2>Forudsætninger</h2>
		<img src="{{{ asset('icons/check.svg') }}}" alt="Description of course banner">
		<ul>
			<li>Du skal have en cykel </li>
			<li>Du skal have følgende værktøj ved hånden: Skruetrækker, svensknøgle, cykelolie</li>
			<li>Penge til at købe de nødvendige reserve dele. Det koster p.t. ca. 75kr at købe ind til at skifte et dæk.</li>
		</ul>
	</div><!-- prerequisites -->
	
	<div class="courseOverview">
		<h2 id="indhold">Indhold</h2>
		<table>
			<?php $s=1; $l=1; ?>
			@for ($i = 1; $i <= 8; $i++)
			<tr class="courseSection">
				<td class="lessonNumber">Sektion {{{$s++}}}</td>
				<td class="lessonTitle">Introduktionen</td>
				<td class="lessonLength">12min</td>
			<tr>
			<tr class="courseLesson">
				<td class="lessonNumber">Lektion {{{$l++}}}</td>
				<td class="lessonTitle"><a href="{{{ route('lesson', array('course' => Clean::url($course), 'lesson' => 'introduktion-til-cykel-reperation')) }}}">Introduktion til cykel reperation</a></td>
				<td class="lessonLength">8min 12s</td>
			</tr>
			<tr class="courseLesson">
				<td class="lessonNumber">Lektion {{{$l++}}}</td>
				<td class="lessonTitle"><a href="{{{ route('lesson', array('course' => Clean::url($course), 'lesson' => 'det-skal-du-bruge')) }}}">Dét skal du bruge!</a></td>
				<td class="lessonLength sectionEnd">3min 43s</td>
			</tr>
			@endfor
		</table>
	</div><!-- courseOverview -->
</div><!-- course -->
@stop