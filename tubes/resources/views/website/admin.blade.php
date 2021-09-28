@extends('layouts.backend.main')

@section('title')
<div class="hero user-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1>{{Str::of(Auth::user()->name)->words(3)}} profile</h1>
					<ul class="breadcumb">
						<li class="active"><a href="#">Dashboard</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('detail_setting')
<style>

</style>
<div class="col-md-9 col-sm-12 col-xs-12">
    <div class="form-style-1 user-pro" action="#">
    <form method="POST" action="{{route('moviestore')}}"  class="user" enctype="multipart/form-data">
        <div class="row">
        <div class="col-md-12">
            <h4><i class="fa fa-film"></i> Add New Movie</h4>
            <div class="row btn-transform transform-vertical" style="width:100%">
                    <div><a href="{{route('moviecreate')}}" class="item item-1 yellowbtn">New Movie</a></div>
                    <div><a href="{{route('moviecreate')}}" class="item item-2 yellowbtn"> <i class="ion-plus"></i></a></div>
            </div>
        </div>
        </div>
        <br>
        <div class="row">
        <div class="col-md-12">
            <h4><i class="fa fa-star"></i> Add New Celebrity</h4>
            <div class="row btn-transform transform-vertical" style="width:100%">
                    <div><a href="{{route('celebritycreate')}}" class="item item-1 yellowbtn">New Celebrity</a></div>
                    <div><a href="{{route('celebritycreate')}}" class="item item-2 yellowbtn"> <i class="ion-plus"></i></a></div>
            </div>
        </div>
        </div>
        <br>
        <div class="row">
        <div class="col-md-12">
            <h4><i class="fa fa-globe"></i> Write New Blog</h4>
            <div class="row btn-transform transform-vertical" style="width:100%">
                    <div><a href="{{route('blogcreate')}}" class="item item-1 yellowbtn">New Blog</a></div>
                    <div><a href="{{route('blogcreate')}}" class="item item-2 yellowbtn"> <i class="ion-plus"></i></a></div>
            </div>
        </div>
        </div>
    </form>
    </div>
</div>
@endsection