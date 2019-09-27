@extends('layouts.frontend')

@section('title-website')
    About Us
@endsection

@section('title')
    About Us Page
@endsection

@section('content')
<!-- container 12 -->
<div class="container_12">
    <!-- mission and vision -->
    @php
        $about = \App\About::paginate(4);
    @endphp
    @foreach($about as $data)
    <div class="grid_6">
        <div class="divider_page"><h2>{{$data->title}}</h2></div>
       <p style="font-size:15px">{{$data->desc}}</p>
    </div>
    @endforeach
    <!-- mission and vision end -->
</div>
<!-- container 12 end -->
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
            <div class="progress_bar" data-percentage="{{ $data->percentage }}" data-title="{{ $data->title }}%"><span></span></div>
        @endforeach
        </div>
    </div>
    <!-- progress bar end -->
</div>
<!-- container 12 end -->
<!-- container 12 -->
<div class="container_12">
    <!-- our team members -->
    <!-- team navi -->
    <div class="grid_12">
        <div class="divider_page">
            <h2>Our Team</h2>
            <div class="heading_button">
                <div class="prev_button" id="teammembers_prev">Prev</div>
                <div class="next_button" id="teammembers_next">Next</div>
            </div>
        </div>
    </div>
    <!-- team navi end -->
    <!-- our team members -->
    <div class="team_members">
    @php
        $team = \App\Team::all();
    @endphp
    @foreach($team as $data)
        <!-- a member -->
        <div class="a_member">
            <!-- member pic -->
            <div class="member_pic">
                <img src="{{ asset('assets/img/team/'.$data->image)}}" alt="member1">
            </div>
            <!-- member pic end -->
            <!-- member content -->
            <div class="member_content">
                <!-- member info -->
                <div class="member_info">
                    <div class="member_name">{{ $data->title }}</div>
                    <div class="member_job">{{ $data->desc }}</div>
                </div>
                <!-- member info end -->
                <!-- member social networks end -->
                <div class="clearfix"></div>
            </div>
            <!-- member content end -->
        </div>
        <!-- a member end -->
    @endforeach
    </div>
    <!-- our team members end -->
</div>
<!-- container 12 end -->
<!-- container 12 -->
<div class="container_12">
</div>
<!-- container 12 end -->
@endsection