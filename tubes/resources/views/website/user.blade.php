@extends('layouts.backend.main')

@section('title')
<div class="hero user-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1>{{Auth::user()->name}} profile</h1>
					<ul class="breadcumb">
						<li class="active"><a href="#">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span>Profile</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('detail_setting')
<div class="col-md-9 col-sm-12 col-xs-12">
<div class="form-style-1 user-pro" action="#">
    <form method="POST" action="{{route('moviestore')}}"  class="user" enctype="multipart/form-data">
        <div class="row">
        <div class="col-md-12">
            <h4><i class="fa fa-film"></i> Favorites List</h4>
            <div class="row btn-transform transform-vertical" style="width:100%">
                    <div><a href="{{route('user.favorites',Auth::user()->id)}}" class="item item-1 yellowbtn">See</a></div>
                    <div><a href="{{route('user.favorites',Auth::user()->id)}}" class="item item-2 yellowbtn"> <i class="ion-eye"></i></a></div>
            </div>
        </div>
        </div>
        <br>
        <div class="row">
        <div class="col-md-12">
            <h4><i class="fa fa-star"></i> Reviews List</h4>
            <div class="row btn-transform transform-vertical" style="width:100%">
            <div><a href="{{route('user.reviews',Auth::user()->id)}}" class="item item-1 yellowbtn">See</a></div>
                    <div><a href="{{route('user.reviews',Auth::user()->id)}}" class="item item-2 yellowbtn"> <i class="ion-eye"></i></a></div>
            </div>
        </div>
        </div>
        <br>
    </form>
    </div> 
</div>
@endsection