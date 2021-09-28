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
                @foreach ($celeb as $celebrity)
					<div class="col-md-12">
					
						<div class="ceb-item-style-2">
                            <img src="{{ asset('../../images/uploads/'.$celebrity->image) }}" alt="">
							<!-- <img src="images/uploads/{{$celebrity->image}}" alt=""> -->
							<div class="ceb-infor">
								<h2><a href="{{route('celebsingle', $celebrity->id)}}">{{$celebrity->name}}</a></h2>
								<span>{{$celebrity->category}}, {{$celebrity->country}}</span>
								<p  align="justify">{{$celebrity->excerpt}}</p>
							</div>
						</div>
					</div>
			    @endforeach
			</div>
			@include ('layouts.includes.sidebar_cel')
		</div>
	</div>
</div>
@endsection