<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
<meta name="author" content="DesignForLife" />
<meta name="description" content="A Multi Purpose Responsive Template - Created by DesignForLife" />
<link rel="icon" href="logo.jpg">
<title>Arkamaya | @yield('title-website')</title>
<link rel="stylesheet" type="text/css" href="{{ asset('DreamLife/html/assets/css/style.css')}}" />
<!-- CSS assets Here -->
@yield('css')
<!-- End CSS assets Here -->
</head>
<body>
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