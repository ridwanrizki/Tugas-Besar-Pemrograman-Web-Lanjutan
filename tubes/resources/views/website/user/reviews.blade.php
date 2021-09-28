@extends('layouts.backend.main')

@section('title')

<div class="hero user-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct ">
                    <h1>{{Auth::user()->name}}'s Reviews</h1>                        
					<ul class="breadcumb">
                        <li class="active"><a href="{{route('user.page')}}">Dashboard</a></li>
						<li> <span class="ion-ios-arrow-right"></span>Reviews</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('detail_setting')
<div class="col-md-9 col-sm-12 col-xs-12">
<div class="topbar-filter user">
        <p>Found <span>{{$reviews->total()}}</span> rates in total &emsp;|&emsp; Showing <span>{{$reviews->count()}}</span> data</p>
</div>
@foreach($reviews as $review)
<div class="movie-item-style-2 userrate">
    <img src="{{asset('images/uploads/'.$review->movie->image)}}" alt="">
    <div class="mv-item-infor">
        
        <h6><a href="#">{{$review->movie->title}} <span>({{$year = strtok($review->movie->release_date, '-')}})</span></a></h6>
        <p class="time sm-text">your rate:</p>
        <p class="rate"><i class="ion-android-star"></i><span>{{$review->rating}}</span> /10</p>
        <p class="time sm-text">your reviews:</p>
        <p class="time sm">{{$review->created_at}}</p>
        <p>“{{$review->review}}”</p>		
    </div>
</div>
@endforeach
<div class="box-footer">
        <div class="pull-right">
            <ul class="pagination2 no-margin">
                {{ $reviews->links("pagination::bootstrap-4")}}
            </ul>
        </div>
    </div>
</div>
@endsection