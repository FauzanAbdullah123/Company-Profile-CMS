<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
<meta name="author" content="DesignForLife" />
<meta name="description" content="A Multi Purpose Responsive Template - Created by DesignForLife" />
<link rel="icon" href="{{ asset('icon.png')}}">
<title>Arkamaya | @yield('title-website')</title>
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
<!-- CSS assets Here -->
@yield('css')
<!-- End CSS assets Here -->
</head>
<body>
<div class="preloader">
	<div class="loading">
		<img src="preloader.gif" width="300">
		<p style="font-size: 25px; text-align:center;">Please Wait</p>
	</div>
</div>
<!-- container full -->
<div class="container_full">
    <!-- Navigation Bar -->
    @include('layouts.partial-frontend.navbar')
    <!-- End Navigation Bar -->
	<!-- header text -->
	<div class="header_text">
		<div class="container_12">
			<div class="grid_9">
				<h3>@yield('title')</h3>
			</div>
		</div>
	</div>
	<!-- header text end -->
	<!-- Content -->
	@yield('content')
	<!-- End Content -->
	<!-- footer -->
	@include('layouts.partial-frontend.footer')
	<!-- footer end -->
</div>
<!-- container full end -->
<script src="{{ asset('DreamLife/html/assets/js/jquery-1.9.0.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('DreamLife/html/assets/js/jquery.components.js')}}" type="text/javascript"></script>
<script src="{{ asset('DreamLife/html/assets/js/custom.js')}}" type="text/javascript"></script>
<!-- JS assets Here -->
@stack('js')
<!-- End JS assets Here -->
</body>
</html>