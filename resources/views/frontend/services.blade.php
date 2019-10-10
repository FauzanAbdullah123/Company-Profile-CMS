@extends('layouts.frontend')

@section('title-website')
    Services
@endsection

@section('title')
    Services Page
@endsection

@section('content')
<!-- container 12 -->
@foreach($service as $data)
<div class="container_12">
    <!-- mission and vision -->
    <div class="grid_6">
        <img src="{{ asset('assets/img/service/'.$data->image)}}"  width="450px" height="200px" alt="" style="position: relative; border-radius: 15px;" />      
    </div>
    <div class="grid_6">
        <div class="divider_page"><h2>{{ $data->title }}</h2></div>
        <p style="font-size:15px; margin-bottom: 30px;" >{!! nl2br(e($data->desc)) !!}</p><br><br>
    </div>
    <!-- mission and vision end -->
     <!-- features boxes -->
     <div class="grid_12">
        @foreach($data->otherservice as $a)
        <div class="grid_3 alpha">
            <!-- a feature box -->
            <div class="feature_box" style="margin-bottom: 60px;">
               <div class="feature_icon">
                <a href="{{ route('detail.otherservice', $a->slug) }}"><img src="{{ asset('assets/img/otherservice/'.$a->image)}}" width="35px" height="35px" alt=""></a>
                </div>
                <div class="feature_content" style="height: 200px; border-radius: 15px;">
                    <div class="feature_heading">
                        <div class="small" style="font-size:22px;">{{$a->title}}</div>
                    </div>
                    <div class="feature_desc" style="font-size:15px; text-align:center; font-color:white;">{!! substr($a->desc, 0, 170) !!} ...</div>
                </div>
                 <div class="feature_link"><a href="{{ route('detail.otherservice', $a->slug) }}" class="arrows_icons16 icon16_5 tooltip_s" title="Read More"></a></div>
            </div>
            <!-- a feature box end -->
        </div>
        @endforeach
    </div>
    <!-- features boxes end -->
</div>
@endforeach
<!-- container 12 end -->
<br><br><br>
@endsection