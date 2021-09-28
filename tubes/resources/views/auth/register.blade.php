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
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
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
<style>

    .lg-form {
    width: 700px;
    padding: 50px;
    border: 1px solid #e1e1e1;
    height: auto;
    background-color: #ffffff;
    margin-left: auto;
    margin-right: auto;
    }

    @media (max-width: 767px) {
    .lg-form {
        width: 300px;
        padding: 30px;
    }
    }
    .lg-form h3 {
    font-family: 'Dosis', sans-serif;
    font-size: 36px;
    color: #222222;
    font-weight: 700;
    text-transform: uppercase;
    margin-bottom: 45px;
    text-align: center;
    }
    @media (max-width: 767px) {
    .lg-form h3 {
        margin-bottom: 15px;
    }
    }
    .lg-form .remember {
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 25px;
    font-family: 'Nunito', sans-serif;
    font-size: #abb7c4;
    color: #222222;
    font-weight: 600;
    text-transform: none;
    }
    @media (max-width: 767px) {
    .lg-form .remember {
        margin-bottom: 15px;
    }
    }
    .lg-form .remember input[type="checkbox"] {
    width: 20px;
    height: 20px;
    border: 1px solid #e1e1e1;
    margin-right: 5px;
    position: relative;
    }
    .lg-form .remember span {
    margin-top: 3px;
    position: absolute;
    }
    .lg-form label {
    font-family: 'Dosis', sans-serif;
    font-size: 14px;
    color: #222222;
    font-weight: bold;
    text-transform: uppercase;
    width: 100%;
    margin-bottom: 25px;
    }
    @media (max-width: 767px) {
    .lg-form label {
        margin-bottom: 15px;
    }
    }
    .lg-form label input {
    font-family: 'Dosis', sans-serif;
    font-size: 14px;
    color: #222222;
    font-weight: bold;
    text-transform: capitalize;
    margin-top: 10px;
    height: 42px;
    border: 1px solid #e1e1e1;
    }
    .lg-form label input::-webkit-input-placeholder {
    font-family: 'Dosis', sans-serif;
    font-size: 14px;
    color: #222222;
    font-weight: bold;
    text-transform: capitalize;
    }
    .lg-form button {
    font-family: 'Dosis', sans-serif;
    font-size: 14px;
    color: #ffffff;
    font-weight: bold;
    text-transform: uppercase;
    border: none;
    background-color: #dd003f;
    height: 42px;
    width: 100%;
    cursor: pointer;
    }
    .lg-form p {
    color: #222222;
    margin-top: 35px;
    margin-bottom: 20px;
    }
    @media (max-width: 767px) {
    .lg-form p {
        margin-bottom: 15px;
        margin-top: 15px;
    }
    }
    .lg-form .social-btn-2 {
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    align-items: center;
    justify-content: space-between;
    }
    .lg-form .social-btn-2 a {
    width: 50%;
    height: 42px;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Dosis', sans-serif;
    font-size: 16px;
    color: #ffffff;
    font-weight: 700;
    text-transform: uppercase;
    cursor: pointer;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    }
    .lg-form .social-btn-2 a i {
    margin-right: 10px;
    }
    .lg-form .social-btn-2 .fb {
    background-color: #3a5a9a;
    margin-right: 15px;
    }
    .lg-form .social-btn-2 .tw {
    background-color: #00b9ef;
    }
</style>

<div class="page-single">
<div class="row">
    <div class="col-md-12">
        <div class="lg-form">
                <h3>sign up</h3>
                <form method="post" action="{{ route('register') }}">
                @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">
                                Name:
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="" value="{{ old('name') }}" required autocomplete="name" autofocus />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </label>
                        </div>

                        <div class="col-md-6">
                            <label for="username">
                                Username:
                                <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="" value="{{ old('username') }}" required autocomplete="username" autofocus/>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </label>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <label for="state">
                            State:
                            <input type="text" name="state" id="state" class="form-control @error('state') is-invalid @enderror" placeholder="" value="{{ old('state') }}" required autocomplete="state" autofocus/>
                                @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </label>
                        </div>
                        
                        <div class="col-md-6">
                            <label for="email">
                                Email:
                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </label>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <label for="country">
                                Country:
                                <input type="text" name="country" id="country" class="form-control @error('country') is-invalid @enderror" placeholder="" value="{{ old('country') }}" required autocomplete="country" autofocus/>
                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </label>
                        </div>
                            
                            <div class="col-md-6">
                                <label for="password">
                                Password:
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="" value="{{ old('password') }}" required autocomplete="new-password" autofocus/>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <label for="repassword-2">
                                re-type Password:
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </label>
                        </div>
                    </div>
                <div class="row">
                    <button type="submit">sign up</button>
                </div>
                </form>
        </div>
    </div>
</div>
</div>


<!-- footer section-->
@include('layouts.includes.footer')
<!-- end of footer section-->

<script type="text/javascript" src="{{ URL::to('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/plugins.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/plugins2.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('js/custom.js') }}"></script>
</body>


</html>