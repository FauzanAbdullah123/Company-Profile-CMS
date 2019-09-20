@extends('layouts.frontend')

@section('title-website')
    Gallery
@endsection

@section('title')
    Gallery Page
@endsection

@section('content')
<!-- container 12 -->
<div class="container_12">
    <div class="grid_12">
        <!-- filter options -->
        <!-- filter options end -->
    </div>
    <div class="clearfix"></div>
    <!-- portfolio items -->
    <div class="portfolio_items four_columns">
        @foreach($gallery as $data)
        <!-- a portfolio item -->
        <div class="a_item" data-cats="photography interactive">
            <div class="grid_3">
                <!-- item image -->
                <div class="a_work">
                    <!-- image -->	
                    <div class="normal">
                        <img src="{{ asset('assets/img/gallery/'.$data->image)}}" width="300px" height="150px" alt="" class="grid_image"/>
                    </div>
                    <!-- image end -->
                    <!-- hover effect -->
                    <div class="hover">
                        <div class="work_links">
                            <div><a href="{{ asset('assets/img/gallery/'.$data->image)}}" data-rel="prettyPhoto" class="misc_white_icons16 icon16_15"></a></div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- social links -->
                        <!-- social links end -->
                    </div>
                    <!-- hover effect end -->
                </div>
                <!-- item image end -->
            </div>
        </div>
        <!-- a portfolio item end -->
        @endforeach
        
    </div>
    <!-- portfolio items end -->
    <div class="grid_12">
        <!-- page navigation -->
        <ul class="page_navigation">
            <li><a href="#page1" class="prev_page passive"></a></li>
            <li><a href="#page1" class="active">1</a></li>
            <li><a href="#page2">2</a></li>
            <li><a href="#page3">3</a></li>
            <li><a href="#page4">4</a></li>
            <li><a href="#page5">5</a></li>
            <li><a href="#" class="more_page">...</a></li>
            <li><a href="#page99">99</a></li>
            <li><a href="#page2" class="next_page"></a></li>
        </ul>
        <!-- page navigation end -->
    </div>
</div>
<!-- container 12 end -->
@endsection