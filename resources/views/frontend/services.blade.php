@extends('layouts.frontend')

@section('title-website')
    Services
@endsection

@section('title')
    Services Page
@endsection

@section('content')
<!-- container 12 -->
<div class="container_12">
    <!-- mission and vision -->
    <div class="grid_6">
        <!-- page slider -->
        <div class="sliderinPage theme-dark">
            <div class="nivoSlider">
              @foreach($services as $data)
                <img src="{{ asset('assets/img/service/'.$data->image)}}" alt="" />
              @endforeach
            </div>
        </div>
        <!-- page slider end -->
    </div>
    <div class="grid_6">
    @php
        $services = \App\services::first()->paginate(1);
    @endphp
    @foreach($services as $data)
        <div class="divider_page"><h2>{{ $data->title }}</h2></div>
        <p style="font-size:15px">{{ $data->desc }}</p>
    @endforeach
    </div>
    <!-- mission and vision end -->
</div>

<div class="container_12">
    <div class="grid_12">
       @php
        $services = \App\services::where('id', '=', 7)->paginate(1);
       @endphp
        @foreach($services as $data)
        <div class="divider_page">
            <h2>{{ $data->title }}</h2>
        </div>
        <p style="font-size:18px">{{ $data->desc }}</p>
        @endforeach
    </div>
</div><br><br>
<!-- container 12 end -->
<!-- container 12 -->
<div class="container_12">
    <!-- features boxes -->
    <div class="grid_12">
        @foreach($otherservice as $data)
        <div class="grid_3 alpha">
            <!-- a feature box -->
            <div class="feature_box">
                <div class="feature_icon">
                    <img src="{{ asset('assets/img/otherservice/'.$data->image)}}" width="35px" height="35px" alt="">
                </div>
                <div class="feature_content">
                    <div class="feature_heading">
                        <div class="small" style="font-size:22px;">{{$data->title}}</div>
                    </div>
                    <div class="desc" style="font-size:15px; text-align:center; font-color:white;">{{$data->desc}}</div>
                </div>
            </div>
            <!-- a feature box end -->
        </div>
        @endforeach
    </div>
    <!-- features boxes end -->
</div>
<!-- container 12 end -->
<!-- container 12 -->
<div class="container_12">
    <!-- other services -->
    <div class="grid_12">
        @php
        $services = \App\services::where('id', '>=', 8)->paginate(200);
        @endphp
        @foreach($services as $data)
        <div class="divider_page"><h2>{{ $data->title }}</h2></div>
        <p style="font-size:15px">{{ $data->desc }}</p>
        <!-- <ul>
            <li>Developing Web Based Enterprise Applications ASP .NET MVC</li>
            <li>Understanding Database Management System Miscrosoft SQL Server</li>
            <li>Developing Web-Based Applications Using PHP (PHP: Hypertext Preprocessor)</li>
            <li>Developing Mobile Applications (Android SDK)</li>
        </ul>  -->
        @endforeach      
    </div>
</div>
<!-- container 12 end -->
<br><br><br>
@endsection