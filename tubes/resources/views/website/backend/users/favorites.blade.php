@extends('layouts.backend.main')

@section('title')

<div class="hero user-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct ">
                    <h1>{{$user->name}}'s Favorites</h1>                        
					<ul class="breadcumb">
                        <li class="active"><a href="{{route('admin.page')}}">Dashboard</a></li>
						<li class="active"> <span class="ion-ios-arrow-right"></span> <a href="{{route('userlist')}}">User List</a></li>
						<li class="active"> <span class="ion-ios-arrow-right"></span> <a href="{{route('userdetail', $user->id)}}">User Detail</a></li>
						<li> <span class="ion-ios-arrow-right"></span>Favorites</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('detail_setting')
<style>
    .tbl{
        font-family: "Noto Sans", sans-serif;
        color: white; 
    }

    .tbl thead{
        color : #dcf836;
    }

    .del{
        color: #961219;
    }

    .del:hover{
        color: #ff4d4d;
    }

    .see{
        color: #0e518f;
    }

    .see:hover{
        color : #2f96f7;
    }
</style>
<div class="col-md-9 col-sm-12 col-xs-12">
<div class="topbar-filter user">
        <p>Found <span>{{$favorites->total()}}</span> rates in total &emsp;|&emsp; Showing <span>{{$favorites->count()}}</span> data</p>
</div>
@foreach($favorites as $favorite)
<div class="flex-wrap-movielist user-fav-list">
    <div class="movie-item-style-2">
        <img src="{{asset('images/uploads/'.$favorite->movie->image)}}" alt="">
        <div class="mv-item-infor">
            <h6><a href="#">{{$favorite->movie->title}} <span>({{$year = strtok($favorite->movie->release_date, '-')}})</span></a></h6>
            <p class="rate"><i class="ion-android-star"></i><span>{{$favorite->movie->rating}}</span> /10</p>
            <p class="describe">{{$favorite->movie->excerpt}}</p>
            <p class="run-time"> Run Time: {{$favorite->movie->run_time}}    .     <span>MMPA : {{$favorite->movie->mmpa_ratings}} </span>    .     <span>Release: {{$favorite->movie->release_date}}</span></p>
            <!-- <p>Director: 
                @foreach($casts as $cast)
                    @if($cast->movie_id == $favorite->movie_id && $cast->category == "Director")
                        <a href="#">{{$cast->celeb}}</a> , 
                    @endif
                @endforeach 
            </p>
            <p>Stars: 
                @foreach($casts as $cast)
                    @if($cast->movie_id == $favorite->movie_id && $cast->category == "Actor")
                        <a href="#">{{$cast->celeb}}</a> , 
                    @endif
                @endforeach               
            </p> -->
        </div>
    </div>
</div>
@endforeach

<div class="box-footer">
        <div class="pull-right">
            <ul class="pagination2 no-margin">
                {{ $favorites->links("pagination::bootstrap-4")}}
            </ul>
        </div>
    </div>
</div>
@endsection