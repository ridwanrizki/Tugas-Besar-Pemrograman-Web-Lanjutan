@extends('layouts.main')

@section('content')
<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1> Hasil Pencarian Anda </h1>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single movie_list">
	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-8 col-sm-12 col-xs-12">
            @foreach ($list as $blog)
				<div class="blog-item-style-1 blog-item-style-3">
                    <img src="{{ asset('../../images/uploads/'.$blog->image) }}" alt="">
            		<!-- <img src="images/uploads/{{$blog->image}}" alt=""> -->
            		<div class="blog-it-infor">
            			<h3><a href="{{route('blogdetail', $blog->id)}}">{{$blog->title}}</a></h3><br>
                        
            			<span class="time">{{$blog->created_at}}</span>
            			<p  align="justify">{{$blog->excerpt}}</p>
            		</div>
            	</div>
                @endforeach
			</div>
			@include ('layouts.includes.sidebar_blog')
		</div>
	</div>
</div>
@endsection