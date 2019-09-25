<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
<meta name="author" content="DesignForLife" />
<meta name="description" content="A Multi Purpose Responsive Template - Created by DesignForLife" />
<link rel="icon" href="{{ asset('icon.png')}}">
<title>Arkamaya | Home</title>
<link rel="stylesheet" type="text/css" href="{{ asset('DreamLife/html/assets/css/style.css')}}" />
<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
<style type="text/css">
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background-color: #fff;
    }
    .preloader .loading {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%,-50%);
      font: 14px arial;
    }
</style>
<script>
    $(document).ready(function(){
     setTimeout(function(){ $('.preloader').fadeOut('slow'); }, 2000);
})
</script>
</head>
<body>
<div class="preloader">
	<div class="loading">
		<img src="1pGE.gif" width="150">
	</div>
</div>
<!-- container full -->
<div class="container_full">
	<!-- header -->
	<div id="header_wrapper" class="clearfix withSlider" style="background:#fc4903; border-bottom: 1px solid white;">
	<!-- menu -->
	<div id="header">
		<!-- logo -->
		<div id="logo"><a href="/"><img src="{{ asset('logoarkamaya-removebg-preview.png')}}" height="30px" alt="logo" /></a></div>
		<!-- logo end -->
		<!-- main menu -->
		<ul id="mainmenu" style="background:black;">
			<li><a href="/">Home</a></li>
			<li><a href="/about">About Us</a></li>
			<li><a href="/services">Services</a></li>
			<li><a href="/gallery">Gallery</a></li>
			<li><a href="/blog">Blog</a></li>
		<!-- main menu end -->
		<!-- search bar -->
		<div class="search_bar">
			<form action="{{ route('all.blog') }}">
				<input name="cari" value="Type &amp; Search Blog" type="text" />
				<button type="submit"><i class="search_button"></i></button>
			</form>
		</div>
		<!-- search bar end -->
	</div>
	<!-- menu end -->
	<!-- slider -->
	<div class="camera_wrap" id="cameraSlider">
	 @php
		$sliders = \App\Sliders::all();
	@endphp
	@foreach($sliders as $data)
        <div data-thumb="" data-src="{{ asset('assets/img/sliders/'.$data->image)}}">
        	<div class="camera_desc pink heading fadeIn camera_effected" style="bottom:250px;left:80px;">{{$data->title}}</div>
        	<div class="camera_desc black fadeIn camera_effected" style="bottom:140px;left:80px;">{{$data->desc}}</div>
        </div>
	@endforeach
    </div>
	<!-- slider end -->
	</div>
	<!-- header end -->
	<div class="clearfix"></div>
	<!-- header text -->
	<div class="header_text">
		<div class="container_12">
			<div class="grid_9">
				<h3>Home Page</h3>
				<iframe scrolling="no" frameborder="no" clocktype="html5" style="overflow:hidden;border:0;margin:0;padding:0;width:240px;height:25px;"src="https://www.clocklink.com/html5embed.php?clock=018&timezone=JOG&color=gray&size=240&Title=&Message=&Target=&From=2019,1,1,0,0,0&DateFormat=yyyy / mm / dd DDD&TimeFormat=hh:mm:ss TT&Color=gray"></iframe>
			</div>
		</div>
	</div>
	<!-- header text end -->
	<!-- container 12 -->
	<div class="container_12">
		<!-- features boxes -->
		<div class="grid_12">
		<div class="divider_page"><h2>Our Services</h2></div>
		@php
			$services = \App\Services::all();
		@endphp
        @foreach($services as $data)
        <div class="grid_3 alpha">
            <!-- a feature box -->
					<div class="feature_box">
						<div class="feature_icon">
							<img src="{{ asset('assets/img/service/'.$data->image)}}" width="35px" height="35px" alt="">
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
		<div class="clearfix"></div>
		<!-- popular blog post and testiomonials -->
		<div class="grid_12">
			<!-- popular blog post -->
			<div class="grid_8 alpha">
				<div class="divider_page"><h2>Recent Blog Post</h2></div>
				<!-- a post image -->
				@foreach($article as $blog)
				<div class="grid_4 alpha a_blogpost popular">
					<div class="image">
			    	<div class="normal">
			    		<img src="{{ asset('assets/img/article/'.$blog->foto)}}" alt="" class="grid_image"/>
			    	</div>
			    	<div class="hover">
			    		<div class="post_links">
			    			<div><a href="{{ route('detail.blog', $blog->slug) }}" class="misc_white_icons16 icon16_67" title="Read More"></a></div>
			    		</div>
			    		<div class="clearfix"></div>
			    	</div>
			    </div>
				</div>
				<!-- a post image end -->
				<!-- post details -->
				<div class="grid_4 omega">
					<!-- post heading -->
					<h3 class="pp_heading"><a href="{{ route('detail.blog', $blog->slug) }}">{{ $blog->judul }}</a></h3>
					<!-- post heading end -->
					<!-- post meta info -->
			    	<div class="meta-info">
							<div class="date-info">{{ date('d F Y' ,strtotime($blog->created_at)) }}</div>
					</div>
			    	<!-- post meta info end -->
			    	<!-- post content -->
			    	<p> {!! substr($blog->konten, 0, 200) !!}</p>
			    	<p><a href="{{ route('detail.blog', $blog->slug) }}" class="sc_button medium">Read More</a></p>
			    	<!-- post content end -->
				</div>
				@endforeach
				<!-- post details end -->
			</div>
			<!-- popular blog post end -->
			<!-- testimonials -->
			<div class="grid_4 omega">
				<div class="divider_page">
					<h2> <center>Our Office</center></h2>
					<div class="heading_button">
					</div>
				</div>
					<!-- a testimonial -->
					<div class="testimonial">
					@php
						$office = \App\Office::all();
					@endphp
					@foreach($office as $data)
						<div class="title">{{ $data->title }}</div>
						<div class="desc">{{ $data->desc }}</div>
					@endforeach
					</div>
					<!-- a testimonial end -->
				</div>
				<!-- a testimonial end -->
			</div>
			<!-- testimonials end -->
		<div class="grid_12" align="center">
				<div class="divider_page">
					<h2> <center>Who We Work With </center></h2>
				</div>
				<div class="heading_button">
					<div class="prev_button" id="testimonials_prev">Prev</div>
					<div class="next_button" id="testimonials_next">Next</div>
				</div>
				@php
					$works = \App\Works::all();
				@endphp
				
				<div class="testimonials">
				@foreach($works as $data)
					<!-- a testimonial -->
					<div class="testimonial">
						<div class="desc" style="font-size:15px;"><center>{{ $data->desc }}<br><br>
																		 <b>{{ $data->title }}</b><br>
																		{{ $data->address }}</center></div>
						<div class="who">
							<img src="{{ asset('assets/img/works/'.$data->image)}}" alt="" height="30px" width="80px"/><span class="job"> , {{ $data->jobs }}</span>
						</div>
					</div>
				@endforeach
				</div>
				
				
		<!-- our clients end -->
		<!-- popular blog post and testiomonials end -->
			</div>
		<!-- our clients -->
		<div class="grid_12">
			<div class="divider_page">
			</div>
			@php
				$logo = \App\Logo::all();
			@endphp
			@foreach($logo as $data)
				<img src="{{ asset('assets/img/logo/'.$data->image)}}" target="_blank" class="a_client themeforest" width="150px" height="60px" style="margin-right: 15px; margin-left: 15px;">
			@endforeach
			</div>
		<!-- our clients end -->
		<!-- popular blog post and testiomonials end -->
	</div>
	
	<!-- container 12 end -->
	
	<!-- footer -->
	@include('layouts.partial-frontend.footer')
	<!-- footer end -->
</div>
<!-- container full end -->
<script src="{{ asset('DreamLife/html/assets/js/jquery-1.9.0.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('DreamLife/html/assets/js/jquery.components.js')}}" type="text/javascript"></script>
<script src="{{ asset('DreamLife/html/assets/js/custom.js')}}" type="text/javascript"></script>
</body>
</html>