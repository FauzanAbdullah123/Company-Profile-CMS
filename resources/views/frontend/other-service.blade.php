@extends('layouts.frontend')

@section('title-website')
    {{ $otherservice->title }}
@endsection

@section('title')
    Other Service Detail
@endsection

@section('content')   
    <!-- container 12 -->
    <div class="container_12">
    <div class="divider_page" align="center"><h2> {{ $otherservice->title }}</h2></div>
		<div class="grid_8" align="center" style="margin-left:17%;">
			<center><p><img src="{{ asset('assets/img/otherservice/'.$otherservice->image)}}" width="130px" heigth="130px"/></p></center>
			<h4>{!! nl2br(e($otherservice->desc)) !!}</h4>
		</div>
	</div>
    <!-- container 12 end -->
@endsection