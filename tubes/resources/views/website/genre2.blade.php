@extends('layouts.main')

@section('content')
<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1> Genre</h1>
					<ul class="breadcumb">
						<li class="active"><a href="#">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span> Genre Mystery</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single movie_list">
	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="topbar-filter">
					<a href="{{route('movielist')}}" class="ion-ios-list-outline"> <span> List</span></a>
					<a  href="{{route('moviegrid')}}" class="ion-grid"> <span> Grid</a>
					<a href="{{route('genre1')}}" class="ion-ios-list-outline"> <span> Genre Fantasy</span></a>
					<a href="{{route('genre2')}}" class="ion-ios-list-outline active"> <span> Genre Mystery</span></a>
					<a href="{{route('genre3')}}" class="ion-ios-list-outline"> <span> Genre Romance</span></a>
					<a href="{{route('genre4')}}" class="ion-ios-list-outline"> <span> Genre Biography</span></a>
				</div>

				@foreach ($gens2 as $gen2)
				<div class="movie-item-style-2">
					<div class="mv-item-infor">
						<h6><a href="{{route('moviesingle',$gen2->id)}}">{{$gen2->title}}</a></h6>
						<p class="rate"><i class="ion-android-star"></i><span>Ratings:</span> /10</p>
						<p class="describe">{{$gen2->body}}</p>
					</div>
				</div>
				@endforeach				
			</div>
			@include('layouts.includes.sidebar_movies')
		</div>
	</div>
</div>
@endsection
