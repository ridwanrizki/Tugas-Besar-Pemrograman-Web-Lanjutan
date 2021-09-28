@extends('layouts.main')

@section('content')
<div class="slider sliderv2">
	<div class="container">
		<div class="row">
	    	<div class="slider-single-item">
			@foreach($movies_rat as $movie))
	    		<div class="movie-item">
	    			<div class="row">
	    				<div class="col-md-8 col-sm-12 col-xs-12">
	    					<div class="title-in">
			    				<div class="cate">
			    					<span class="yell"><a href="{{route('genre'.$movie->genre_id)}}">{{$movie->genre->name}}</a></span>
			    				</div>
			    				<h1><a href="{{route('moviesingle',$movie->id)}}">{{$movie->title}} <span>{{$year = strtok($movie->release_date, '-')}}</span></a></h1>
								<div class="social-btn">
									<a href="#" class="parent-btn"><i class="ion-play"></i> Watch Trailer</a>		
								</div>
			    				<div class="mv-details">
			    					<p><i class="ion-android-star"></i><span>{{$movie->rating}}</span> /10</p>
			    					<ul class="mv-infor">
			    						<li>  Run Time: {{$movie->run_time}} minutes</li>
			    						<li>  Rated: {{$movie->mmpa_ratings}}  </li>
			    						<li>  Release: {{$movie->release_date}}</li>
			    					</ul>
			    				</div>
			    				<div class="btn-transform transform-vertical">
									<div><a href="{{route('moviesingle',$movie->id)}}" class="item item-1 redbtn">more detail</a></div>
									<div><a href= "{{route('moviesingle',$movie->id)}}" class="item item-2 redbtn hvrbtn">more detail</a></div>
								</div>		
			    			</div>
	    				</div>
	    				<div class="col-md-4 col-sm-12 col-xs-12">
		    				<div class="mv-img-2">
			    				<a href="{{route('moviesingle',$movie->id)}}"><img src="{{ asset('../../images/uploads/'.$movie->image) }}" alt=""></a>
			    			</div>
		    			</div>
	    			</div>	
	    		</div>
				@endforeach
	    	</div>
	    </div>
	</div>
</div>
<div class="movie-items  full-width">
	<div class="row">
		<div class="col-md-12">
			<div class="title-hd">
				<h2>In theater</h2>
				<a href="{{route('moviegrid')}}" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
			</div>
			<div class="tabs">
				<ul class="tab-links-2">
					<li class="active"><a href="#tab21-h2">#Latest</a></li>
					<li><a href="#tab22-h2"> #Top Rated</a></li> 
				</ul>
			    <div class="tab-content">
			        <div id="tab21-h2" class="tab active">
			            <div class="row">
			            	<div class="slick-multiItem2">
								@foreach($movies as $movie)
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="{{ asset('../../images/uploads/'.$movie->image) }}" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="{{route('moviesingle',$movie->id)}}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">{{$movie->title}}</a></h6>
				            				<p><i class="ion-android-star"></i><span>{{$movie->rating}}</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
								@endforeach								
			            	</div>
			            </div>
			        </div>
			        <div id="tab22-h2" class="tab">
			           <div class="row">
			            	<div class="slick-multiItem2">
							@foreach($movies_rat as $movie)
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="{{ asset('../../images/uploads/'.$movie->image) }}" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="{{route('moviesingle',$movie->id)}}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">{{$movie->title}}</a></h6>
				            				<p><i class="ion-android-star"></i><span>{{$movie->rating}}</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
								@endforeach
			            	</div>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	</div>
</div>

<div class="trailers full-width">
		<div class="row ipad-width">
			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="title-hd">
					<h2>in theater</h2>
					<a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
				</div>
				<div class="videos">
				 	<div class="slider-for-2 video-ft">
					 @foreach($movies as $movie)
					   <div>
					    	<iframe class="item-video" src="#" data-src="{{ asset('$movie->trailer') }}"></iframe>
					    </div>
					 @endforeach
					</div>
					<div class="slider-nav-2 thumb-ft">
						@foreach($movies as $movie)
							<div class="item">
								<div class="trailer-img">
									<img src="{{ asset('../../images/uploads/'.$movie->image) }}"  alt="photo by Barn Images" width="4096" height="2737">
								</div>
								<div class="trailer-infor">
									<h4 class="desc">{{$movie->title}}</h4>
									<p>trailer</p>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-12 col-xs-12">
				<div class="sidebar">
					<div class="celebrities">
						<h4 class="sb-title">Spotlight Celebrities</h4>
						@foreach($celebs as $celeb)
						<div class="celeb-item">
							<a href="{{route('celebsingle',$celeb->id)}}"><img src="{{ asset('../../images/uploads/'.$celeb->image) }}" alt="" width="70" height="70"></a>
							<div class="celeb-author">
								<h6><a href="{{route('celebsingle',$celeb->id)}}">{{$celeb->name}}</a></h6>
								<span>{{$celeb->category}}</span>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	
</div>
<!-- latest new v2 section-->
<div class="latestnew full-width">
		<div class="row">
			<div class="col-md-9">
				<div class="title-hd">
				
					<h2>Latest news</h2>
					<a href="{{route('bloglist')}}" class="viewall">see all news <i class="ion-ios-arrow-right"></i></a>
				</div>
				<div class="tabs">
				<ul class="tab-links">
					<li class="active"><a href="#tab1-h2">#popular</a></li>                    
				</ul>
				<div class="latestnewv2">
				@foreach($blogs as $blog)
					<div class="blog-item-style-2">
						<a href="{{route('bloglist'),$blog->id}}"><img src="{{ asset('../../images/uploads/'.$blog->image) }}" alt=""></a>
						<div class="blog-it-infor">
							<h3><a href="{{route('bloglist'),$blog->id}}">{{$blog->title}}</a></h3>
							<span class="time">{{$blog->created_at}}</span>
							<p>{{$blog->excerpt}}</p>
						</div>
					</div>
				
					@endforeach
					</div>
				<!-- </div> -->
					<!-- <div class="blog-item-style-2">
						<a href="blogdetail.html"><img src="{{ asset('../../images/uploads/blogv22.jpg') }}" alt=""></a>
						<div class="blog-it-infor">
							<h3><a href="blogdetail.html">First Official Images of Alicia Vikander As Tomb Raider’s Lara Croft</a></h3>
							<span class="time">27 Mar 2017</span>
							<p>Aside from the her digital incarnation, the most recognisable image of Tomb ...</p>
						</div>
					</div>
					<div class="blog-item-style-2">
						<a href="blogdetail.html"><img src="{{ asset('../../images/uploads/blogv23.jpg') }}" alt=""></a>
						<div class="blog-it-infor">
							<h3><a href="blogdetail.html">New Spider-Man: Homecoming Poster Finds Peter Parker At Rest</a></h3>
							<span class="time">27 Mar 2017</span>
							<p>He might be a primary protector of New York City, but at heart, Peter Parker is ...</p>
						</div>
					</div>
					<div class="blog-item-style-2">
						<a href="blogdetail.html"><img src="{{ asset('../../images/uploads/blogv24.jpg') }}" alt=""></a>
						<div class="blog-it-infor">
							<h3><a href="blogdetail.html">Joseph Gordon-Levitt Directing Moive Musical Comedy Wingmen</a></h3>
							<span class="time">27 Mar 2017</span>
							<p>A little over a year ago, we learned that Joseph Gordon-Levitt and Channing ...</p>
						</div>
					</div> -->
				</div>
			</div>
			<div class="col-md-3">
				<div class="sidebar">
					<div class="sb-facebook sb-it">
						<h4 class="sb-title">Find us on Facebook</h4>
						<iframe src="#" data-src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftemplatespoint.net%2F%3Ffref%3Dts&tabs=timeline&width=340&height=315px&small_header=true&adapt_container_width=false&hide_cover=false&show_facepile=true&appId"  height="315" style="width:100%;border:none;overflow:hidden" ></iframe>
					</div>
					<div class="sb-twitter sb-it">
						<h4 class="sb-title">Tweet to us</h4>
						<div class="slick-tw">
							<div class="tweet item" id=""><!-- Put your twiter id here -->
							</div>
							<div class="tweet item" id=""><!-- Put your 2nd twiter account id here -->
							</div>
						</div>					
					</div>
				</div>
			</div>
		</div>
	
</div>
<!--end of latest new v2 section-->
@endsection





