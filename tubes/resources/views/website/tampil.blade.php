@extends('layouts.main')

@section('content')
<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1> Hasil Pencarian Anda</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single movie_list">
	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-8 col-sm-12 col-xs-12">

				@foreach ($movies as $mv)
				<div class="movie-item-style-2">
					<img src="../images/uploads/{{$mv->image}}" alt="">
					<div class="mv-item-infor">
						<h6><a href="{{route('moviesingle',$mv->id)}}">{{$mv->title}}</a></h6>
						<p class="rate"><i class="ion-android-star"></i><span>Ratings:</span> /10</p>
						<p class="describe">{{$mv->body}}</p>
						<p class="run-time"> Run Time:<span>{{$mv->run_time}}</span> MMPA: <span>{{$mv->mmpa_ratings}} </span>    .     <span>Release: {{$mv->release_date}}</span></p>
						<p>Director: <a href="#">Joss Whedon</a></p>
						<p>Stars: <a href="#">Robert Downey Jr.,</a> <a href="#">Chris Evans,</a> <a href="#">  Chris Hemsworth</a></p>
					</div>
				</div>
				@endforeach	
			</div>
			@include('layouts.includes.sidebar_movies')
		</div>
	</div>
</div>
@endsection
