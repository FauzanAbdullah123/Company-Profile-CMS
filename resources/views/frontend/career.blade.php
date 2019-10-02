@extends('layouts.frontend')

@section('title-website')
    Career
@endsection

@section('title')
    Career
@endsection

@section('content')

<!-- container 12 -->
<div class="container_12">
    <!-- tabs -->
    <div class="grid_6">
        <div class="divider_page"><h2>Position Available</h2></div>
        <!-- accordion -->
        <div class="accordion">
         @php
            $positionavailable = \App\PositionAvailable::all();
        @endphp
        @foreach($positionavailable as $data)
            <h5>{{ $data->title }}</h5>
            <div>
                <p>{!! $data->desc !!}</p>
            </div>
        @endforeach
        </div>
        <!-- accordion end -->
    </div>
    <!-- tabs end -->
    <!-- progress bar -->
    <div class="grid_6">
        <div class="divider_page"><h2>We offer the following technology platforms :</h2></div>
        <div class="progress_bars">
        @php
            $platforms = \App\Platforms::all();
        @endphp
        @foreach($platforms as $data)
            <b>{{ $data->platforms }}</b>
            <div class="progress_bar" data-percentage="{{ $data->percentage }}" data-title="{{ $data->percentage }}%"><span></span></div>
        @endforeach
        </div>
    </div>
    <!-- progress bar end -->
</div>
<!-- container 12 end -->
<!-- container 12 -->
<div class="container_12">
</div>
<!-- container 12 end -->
@endsection