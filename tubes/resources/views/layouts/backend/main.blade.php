<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">


<head>
	<!-- Basic need -->
	<title>FILMRECENZO</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">
	<link rel="shortcut icon" href="{{ asset('gambar/FILMRECENZO (7)_nobg.png') }}"  width="16" height="16">


    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
	<!-- Mobile specific meta -->
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone-no">

	<!-- CSS files -->
	<link rel="stylesheet" href="{{ URL::to('css/plugins.css') }}">
	<link rel="stylesheet" href="{{ URL::to('css/style.css') }}">

</head>
<body>
<!--preloading-->
@include('layouts.includes.preloader')
<!--end of preloading-->
<!--login form popup-->
@include('layouts.includes.loginForm')
<!--end of login form popup-->
<!--signup form popup-->
@include('layouts.includes.signupForm')
<!--end of signup form popup-->

<!-- BEGIN | Header -->
@include('layouts.includes.header')
<!-- END | Header -->

<!-- hero and breadcumber -->
@yield('title')
<div class="page-single">
	<div class="container">
		<div class="row ipad-width">
			<!-- sidebar -->
			@include('layouts.backend.sidebar')

			<!-- detail setting -->
			@yield('detail_setting')
		</div>
	</div>
</div>
<!-- footer section-->
@include('layouts.includes.footer')
<!-- end of footer section-->

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/plugins2.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
</body>

<!-- userprofile14:04-->
</html>