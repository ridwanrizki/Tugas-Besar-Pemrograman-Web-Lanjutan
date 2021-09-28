@extends('layouts.main')

@section('content')
<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1> movie listing - list</h1>
					<ul class="breadcumb">
						<li class="active"><a href="#">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span> movie listing</li>
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
					<a href="{{route('movielist')}}" class="ion-ios-list-outline active"> <span> List</span></a>
					<a  href="{{route('moviegrid')}}" class="ion-grid"> <span> Grid</a>
					<a href="{{route('genre1')}}" class="ion-ios-list-outline"> <span> Genre Fantasy</span></a>
					<a href="{{route('genre2')}}" class="ion-ios-list-outline"> <span> Genre Mystery</span></a>
					<a href="{{route('genre3')}}" class="ion-ios-list-outline"> <span> Genre Romance</span></a>
					<a href="{{route('genre4')}}" class="ion-ios-list-outline"> <span> Genre Biography</span></a>
				</div>

				@foreach ($mvlist as $movies)
				<div class="movie-item-style-2">
					<img src="images/uploads/{{$movies->image}}" alt="">
					<div class="mv-item-infor">
						<h6><a href="{{route('moviesingle',$movies->id)}}">{{$movies->title}}</a></h6>
						<p class="rate"><i class="ion-android-star"></i><span>Ratings:</span> /10</p>
						<p class="describe">{{$movies->body}}</p>
						<p class="run-time"> Run Time:<span>{{$movies->run_time}}</span> MMPA: <span>{{$movies->mmpa_ratings}} </span>    .     <span>Release: {{$movies->release_date}}</span></p>
						<p>Director: <a href="#">Joss Whedon</a></p>
						<p>Stars: <a href="#">Robert Downey Jr.,</a> <a href="#">Chris Evans,</a> <a href="#">  Chris Hemsworth</a></p>
					</div>
				</div>
				@endforeach
				

				<div class="topbar-filter">
					<label>Movies per page : <span>{{ $mvlist->perPage() }}</span></label>
					<label>Total Movies : <span>{{ $mvlist->total() }}</span></label>
					
					<div class="pagination2">
						<label>Page <span>{{ $mvlist->currentPage()}}</span>of <span>{{ $mvlist->lastPage() }}</span><br/></label>
						{{ $mvlist->links() }}
					</div>
				</div>				
			</div>
			@include('layouts.includes.sidebar_movies')
		</div>
	</div>
</div>
@endsection
