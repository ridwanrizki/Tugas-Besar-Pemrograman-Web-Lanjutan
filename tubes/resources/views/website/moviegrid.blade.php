@extends('layouts.main')

@section('content')
<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1> movie listing - grid</h1>
					<ul class="breadcumb">
						<li class="active"><a href="#">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span> movie listing</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="topbar-filter">
					<a href="{{route('movielist')}}" class="ion-ios-list-outline"> <span> List</span></a>
					<a  href="{{route('moviegrid')}}" class="ion-grid active"> <span> Grid</a>
					<a href="{{route('genre1')}}" class="ion-ios-list-outline"> <span> Genre Fantasy</span></a>
					<a href="{{route('genre2')}}" class="ion-ios-list-outline"> <span> Genre Mystery</span></a>
					<a href="{{route('genre3')}}" class="ion-ios-list-outline"> <span> Genre Romance</span></a>
					<a href="{{route('genre4')}}" class="ion-ios-list-outline"> <span> Genre Biography</span></a>
				</div>
				<div class="flex-wrap-movielist">

					@foreach($mvgrid as $movies)
				
						<div class="movie-item-style-2 movie-item-style-1">
							<img src="images/uploads/{{$movies->image}}" alt="">
							<div class="hvr-inner">
	            				<a  href="{{route('moviesingle',$movies->id)}}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
							<div class="mv-item-infor">
								<h6><a href="{{route('moviesingle',$movies->id)}}">{{$movies->title}}</a></h6>
								<p class="rate"><i class="ion-android-star"></i><span>8.1</span> /10</p>
							</div>
						</div>					
	
					@endforeach

				</div>		

			
				<div class="topbar-filter">
					<label>Movies per page : <span>{{ $mvgrid->perPage() }}</span></label>
					<label>Total Movies : <span>{{ $mvgrid->total() }}</span></label>
					
					<div class="pagination2">
						<label>Page <span>{{ $mvgrid->currentPage()}}</span>of <span>{{ $mvgrid->lastPage() }}</span><br/></label>
						{{ $mvgrid->links() }}
					</div>
				</div>
			</div>
			@include('layouts.includes.sidebar_movies')
		</div>
	</div>
</div>
@endsection