<?php 
use prudentes\Clean;
?>
@extends('layouts.base')

@section('title')
{{{$lesson}}} | Prudentes
@stop

@section('content')
<div class="lesson">
	<div class="lessonHeader">
		<a href="{{{URL::previous()}}}" class="back">&laquo;Tilbage</a>
		<h1>{{{$lesson}}}</h1>
		<p>Lektion 1 ud af 16 fra kurset "<span class="lessonParent"><a href="{{{URL::to('http://localhost:8000/kursus/s%C3%A5dan-fikser-du-din-cykel')}}}">{{{$course}}}</a></span> "</p>
		<iframe width="660" height="415" src="" data-src="//www.youtube.com/embed/YTpBVMHKjc4" frameborder="0" allowfullscreen class="courseIntroVideo"></iframe>
		<div class="lessonButtons">
			<a href="{{{ route('index') }}}"><span class="down">Download vedhæftet materiale</span></a>
			<a href="{{{ route('myCourses') }}}"><span class="down">&laquo; Til forrige lektion</span></a>
			<a href="{{{ route('wishlist') }}}"><span class="down">Til næste lektion &raquo;</span></a>
		</div><!-- courseButtons -->
	</div><!-- lessonHeader -->
	<div class="course">
		<div class="courseOverview">
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
</div><!-- lessons -->
@stop