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
                <img src="{{ asset('assets/img/service/'.$data->image)}}"  alt="" />
              @endforeach
            </div>
        </div>
        <!-- page slider end -->
    </div>
    @php
    $services = \App\services::all();
    @endphp
    @foreach($services as $data)
    <div class="grid_6">
        <div class="divider_page"><h2>{{ $data->title }}</h2></div>
        <p style="font-size:15px">{{ $data->desc }}</p>
    </div>
    @endforeach
    <!-- mission and vision end -->
</div>

<div class="container_12">
    <!-- features boxes -->
    <div class="grid_12">
		<div class="divider_page"><h2>Other Services</h2></div>
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
                    <div class="desc" style="font-size:15px; text-align:center; font-color:white;">{!! substr($data->desc, 0, 200) !!}</div>
                </div>
            </div>
            <!-- a feature box end -->
        </div>
        @endforeach
    </div>
    <!-- features boxes end -->
</div>
<!-- container 12 end -->
<br><br><br>
@endsection