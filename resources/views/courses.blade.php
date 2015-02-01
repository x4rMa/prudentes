@extends('layouts.base')

@section('title')
Kurser | Prudentes
@stop

@section('content')
	@include('layouts.courseNavigation')
	@include('layouts.courseList')
	@include('layouts.pagination')
@stop
