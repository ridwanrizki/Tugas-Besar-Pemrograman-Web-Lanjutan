@extends('layouts.main')

@section('content')

<!-- untuk rating -->
<div class="login-wrapper" id="login-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>Rate Movie</h3>
		<form method="POST" action="{{route('reviewstore',$movie->id)}}"  class="user" enctype="multipart/form-data">
		@csrf  
		@method('PUT')
			<div class="row">
				<div class="col-md-12 form-it  {{ $errors->has('rating') ? 'has-error' : '' }}">
					<Label> Your Rate :  </Label>
					<input type="hidden" id="php1_hidden" value="1">
					<i class="ion-ios-star-outline" onclick="change(this.id);" id="php1"></i>
					
					<input type="hidden" id="php2_hidden" value="2">
					<i class="ion-ios-star-outline" onclick="change(this.id);" id="php2"></i>
					
					<input type="hidden" id="php3_hidden" value="3">
					<i class="ion-ios-star-outline" onclick="change(this.id);" id="php3"></i>
					
					<input type="hidden" id="php4_hidden" value="4">
					<i class="ion-ios-star-outline" onclick="change(this.id);" id="php4"></i>
					
					<input type="hidden" id="php5_hidden" value="5">
					<i class="ion-ios-star-outline" onclick="change(this.id);" id="php5"></i>
					
					<input type="hidden" id="php6_hidden" value="6">
					<i class="ion-ios-star-outline" onclick="change(this.id);" id="php6"></i>
					
					<input type="hidden" id="php7_hidden" value="7">
					<i class="ion-ios-star-outline" onclick="change(this.id);" id="php7"></i>
					
					<input type="hidden" id="php8_hidden" value="8">
					<i class="ion-ios-star-outline" onclick="change(this.id);" id="php8"></i>
					
					<input type="hidden" id="php9_hidden" value="9">
					<i class="ion-ios-star-outline" onclick="change(this.id);" id="php9"></i>
					
					<input type="hidden" id="php10_hidden" value="10">
					<i class="ion-ios-star-outline" onclick="change(this.id);" id="php10"></i>

					<input type="hidden" name="rating" id="rating" value="0">

					@if($errors->has('rating'))
					<span class="help-block">{{ $errors->first('rating') }}</span>
					@endif
				</div>
			</div>
			<div class="row"></div>
			<div class="row">
				<div class="col-md-12 form-it  {{ $errors->has('review') ? 'has-error' : '' }}">
					<label>Write your review :</label>
					<textarea name="review" id="review" class="form-control" rows="4" cols="50"></textarea>
					@if($errors->has('review'))
					<span class="help-block">{{ $errors->first('review') }}</span>
					@endif
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<input class="submit redbtn" type="submit" value="Send">
				</div>
			</div>	
		</form>
        </div>
    </div>
</div>

<div class="hero mv-single-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- <h1> movie listing - list</h1>
				<ul class="breadcumb">
					<li class="active"><a href="#">Home</a></li>
					<li> <span class="ion-ios-arrow-right"></span> movie listing</li>
				</ul> -->
			</div>
		</div>
	</div>
</div>
<div class="page-single movie-single movie_single">
	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="movie-img sticky-sb">
					<img src="{{asset('images/uploads/'.$movie->image)}}" alt="">
						<div class="movie-btn">	
							<div class="btn-transform transform-vertical red">
								<div><a href="{{$movie->trailer}}" class="item item-1 redbtn"> <i class="ion-play"></i> Watch Trailer</a></div>
								<div><a href="{{$movie->trailer}}" class="item item-2 redbtn fancybox-media hvr-grow"><i class="ion-play"></i></a></div>
							</div>
						</div>
				</div>
			</div>
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="movie-single-ct main-content">
					@if(session('message'))
            <div class="alert alert-info">
                {{session('message')}}
            </div>
					@endif
					<h1 class="bd-hd">{{$movie->title}} <span>{{$year = strtok($movie->release_date, '-')}}</span></h1>
					<div class="social-btn">
						<a href="{{route('favoritestore',$movie->id)}}" class="parent-btn"><i class="ion-heart"></i> Add to Favorite</a>
						<li class="loginLink"><a href="#" class="parent-btn"><i class="ion-star"></i> Rate</a></li>
					</div>
					<div class="movie-rate">
						<div class="rate">
								<i class="ion-android-star"></i>
							<p><span>{{$movie->rating}}</span> /10<br>
							</p>
						
						
						
						</div>
						<style>
						</style>
						<div class="rate-star">
							<p><a href=""></a> Rating : </p>
							<?php $isi = floor($movie->rating);
								  $kosong = 10 - floor($movie->rating);?>
							@for($i=0;$i<$isi;$i++)
							<i class="ion-ios-star"></i>
							@endfor
							@for($i=0;$i<$kosong;$i++)
							<i class="ion-ios-star-outline"></i>
							@endfor
						</div>
					</div>
					<div class="movie-tabs">
						<div class="tabs">
							<ul class="tab-links tabs-mv">
								<li class="active"><a href="#overview">Overview</a></li>
								<li><a href="#reviews"> Reviews</a></li>
								<li><a href="#cast">  Cast & Crew </a></li>                        
							</ul>
						    <div class="tab-content">
						        <div id="overview" class="tab active">
						            <div class="row">
						            	<div class="col-md-8 col-sm-12 col-xs-12">
						            		<p>{{$movie->body}}</p>

											<div class="title-hd-sm">
												<h4>cast</h4>
											</div>
											<!-- movie cast -->
											<div class="mvcast-item">	
											@foreach($casts as $cast)
												@if($cast->movie_id == $movie->id && $cast->category == "Actor")
													<p></p>, 
												<div class="cast-it">
													<div class="cast-left">
														<img src="{{asset('../images/uploads/'.$cast->image)}}" alt="">
														<a href="#">{{$cast->celeb}}</a>
													</div>
													<p>...  {{$cast->in_role}}</p>
												</div>
												@endif
											@endforeach 
											</div>
						            	</div>
						            	<div class="col-md-4 col-xs-12 col-sm-12">
						            		<div class="sb-it">
						            			<h6>Director: </h6>
												@foreach($casts as $cast)
													@if($cast->movie_id == $movie->id && $cast->category == "Director")
														<p><a href="#">{{$cast->celeb}}</a></p>,
													@endif
												@endforeach 
						            		</div>
						            		<div class="sb-it">
						            			<h6>Stars: </h6>
												@foreach($casts as $cast)
													@if($cast->movie_id == $movie->id && $cast->category == "Actor")
														<p><a href="#">{{$cast->celeb}}</a>,  </p>
													@endif
												@endforeach               
						            		</div>
						            		<div class="sb-it">
						            			<h6>Genres:</h6>
						            			<p><a href="#">{{$movie->genre->name}}</a></p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Release Date:</h6>
						            			<p>{{$movie->release_date}} ({{$movie->country}})</p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Run Time:</h6>
						            			<p>{{$movie->run_time}} min</p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>MMPA Rating:</h6>
						            			<p>{{$movie->mmpa_ratings}}</p>
						            		</div>
						            	</div>
						            </div>
						        </div>
						        <div id="reviews" class="tab review">
						           <div class="row">
						            	<div class="rv-hd">
						            		<div class="div">
							            		<h3>Reviews To</h3>
						       	 				<h2>{{$movie->title}}</h2>
							            	</div>
							            	
						            	</div>



						            	<div class="topbar-filter">
											<p>Found <span>{{$reviews->count()}}</span> in total</p>
										</div>
										
										@foreach($reviews as $review)
											<div class="mv-user-review-item">
												<div class="user-infor">
													<div>
													@foreach($users as $user)
														@if($user->id == $review->user_id)
															<h3>{{$user->name}}</h3>
														@endif
													@endforeach
														<div class="no-star">
															<i class="ion-android-star"></i>
															<i class="ion-android-star"></i>
															<i class="ion-android-star"></i>
															<i class="ion-android-star"></i>
															<i class="ion-android-star"></i>
															<i class="ion-android-star"></i>
															<i class="ion-android-star"></i>
															<i class="ion-android-star"></i>
															<i class="ion-android-star"></i>
															<i class="ion-android-star last"></i>
														</div>
														<p class="time">
															{{$review->created_at}}
														</p>
													</div>
												</div>
												<p>{{$review->review}}</p>
											</div>
										@endforeach

										
						            </div>
						        </div>
						        <div id="cast" class="tab">
						        	<div class="row">
						            	<h3>Cast & Crew of</h3>
					       	 			<h2>{{$movie->title}}</h2>
										<!-- //== -->
					       	 			<div class="title-hd-sm">
											<h4>Directors & Credit Writers</h4>
										</div>
										@foreach($casts as $cast)
											@if($cast->movie_id == $movie->id && $cast->category == "Director")
												<div class="mvcast-item">											
													<div class="cast-it">
														<div class="cast-left">
															<img src="{{asset('../images/uploads/'.$cast->image)}}" alt="">
															<a href="#">{{$cast->celeb}}</a>
														</div>
														<p>...  {{$cast->in_role}}</p>
													</div>
												</div>
											@endif
										@endforeach 



										<!-- //== -->
										<div class="title-hd-sm">
											<h4>Produced by</h4>
										</div>
										@foreach($casts as $cast)
											@if($cast->movie_id == $movie->id && $cast->category == "Producer")
												<div class="mvcast-item">											
													<div class="cast-it">
														<div class="cast-left">
															<img src="{{asset('../images/uploads/'.$cast->image)}}" alt="">
															<a href="#">{{$cast->celeb}}</a>
														</div>
														<p>...  {{$cast->in_role}}</p>
													</div>
												</div>
											@endif
										@endforeach 

										<div class="title-hd-sm">
											<h4>Cast</h4>
										</div>
										@foreach($casts as $cast)
											@if($cast->movie_id == $movie->id && $cast->category == "Actor")
												<div class="mvcast-item">											
													<div class="cast-it">
														<div class="cast-left">
															<img src="{{asset('../images/uploads/'.$cast->image)}}" alt="">
															<a href="#">{{$cast->celeb}}</a>
														</div>
														<p>...  {{$cast->in_role}}</p>
													</div>
												</div>
											@endif
										@endforeach 

										</div>
						            </div>
					       	 	</div>					       	 	
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection