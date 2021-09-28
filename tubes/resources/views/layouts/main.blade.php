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
<script type="text/javascript">
	function change(id)
	{
		var cname="php";
		var ab=document.getElementById(id+"_hidden").value;
		document.getElementById("rating").innerHTML=ab;

		for(var i=ab;i>=1;i--)
		{
			document.getElementById(cname+i).className="ion-ios-star";
		}
		var id=parseInt(ab)+1;
		for(var j=id;j<=10;j++)
		{
			document.getElementById(cname+j).className="ion-ios-star-outline";
		}
	}

</script>
	
</head>
<body>
<!--preloading-->
@include('layouts.includes.preloader')
<!--end of preloading-->
<!--login form popup-->

<!-- BEGIN | Header -->
@include('layouts.includes.header')
<!-- END | Header -->

@yield('content')

<!-- footer section-->
@include('layouts.includes.footer')
<!-- end of footer section-->

<script type="text/javascript" src="{{ URL::to('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/plugins.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/plugins2.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/custom.js') }}"></script>
</body>


</html>
