@extends('layouts.main')

@section('content')
<div class="hero hero3">
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
<!-- celebrity single section-->

<div class="page-single movie-single cebleb-single">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="mv-ceb">
				<img src="{{ asset('../../images/uploads/'.$single->image) }}" alt="">
				
				</div>
			</div>
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="movie-single-ct">
					<h1 class="bd-hd">{{$single->name}}</h1>
					<p class="ceb-single">{{$single->category}}</p>
					<div class="social-link cebsingle-socail">
						<a href="{{$single->link_facebook}}"><i class="ion-social-facebook"></i></a>
						<a href="{{$single->link_twitter}}"><i class="ion-social-twitter"></i></a>
						<a href="{{$single->link_instagram}}"><i class="ion-social-instagram"></i></a>
					</div>
					<div class="movie-tabs">
						<div class="tabs">
							<ul class="tab-links tabs-mv">
								
								<li class="active"><a href="#overviewceb">Overview</a></li>
								<li><a href="#biography"> biography</a></li>
								<!-- <li><a href="#mediaceb"> Media</a></li>  -->
								<li><a href="#filmography">filmography</a></li>                            
							</ul>
						    <div class="tab-content">
						        <div id="overviewceb" class="tab active">
						            <div class="row">
						            	<div class="col-md-8 col-sm-12 col-xs-12">
						            		<p  align="justify">{{$single->excerpt}} ... </p>
											<!-- <p class="time"><a href="{{ url('/celebsingle/biography/' . $single->id) }}">See full bio <i class="ion-ios-arrow-right"></i></a></p> -->
											
						            		<!-- <div class="title-hd-sm">
												<h4>Videos & Photos</h4>
												<a href="#" class="time">All 5 Videos & 245 Photos <i class="ion-ios-arrow-right"></i></a>
											</div>
											<div class="mvsingle-item ov-item">
												<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image11.jpg" ><img src="images/uploads/image1.jpg" alt=""></a>
												<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image21.jpg" ><img src="images/uploads/image2.jpg" alt=""></a>
												<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image31.jpg" ><img src="images/uploads/image3.jpg" alt=""></a>
												<div class="vd-it">
													<img class="vd-img" src="images/uploads/image4.jpg" alt="">
													<a class="fancybox-media hvr-grow" href="https://www.youtube.com/embed/o-0hcF97wy0"><img src="images/uploads/play-vd.png" alt=""></a>
												</div>
											</div> -->
											<!-- <div class="title-hd-sm">
												<h4>filmography</h4>
												<a href="#" class="time">Full Filmography<i class="ion-ios-arrow-right"></i></a>
											</div> -->
											<!-- movie cast -->
											<!-- <div class="mvcast-item">											
											
											</div>
												<div class="cast-it">
													<div class="cast-left cebleb-film">
														<img src="{{asset('images/uploads/film2.jpg')}}" alt="">
														<div>
															<a href="#">Eddie the Eagle </a>
															<p class="time">Bronson Peary</p>
														</div>
													</div>
													<p>...  2015</p>
												</div> -->
											
						            	</div>
						            	<div class="col-md-4 col-xs-12 col-sm-12">
						            		<div class="sb-it">
						            			<h6>Fullname:  </h6>
						            			<p><a href="{{route('celebsingle', $single->id)}}">{{$single->full_name}}</a></p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Date of Birth: </h6>
						            			<p>{{$single->birth_date}}</p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Country:  </h6>
						            			<p>{{$single->country}}</p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Height:</h6>
						            			<p>{{$single->height}} cm</p>
						            		</div>
						            		<!-- <div class="sb-it">
						            			<h6>Keywords:</h6>
						            			<p class="tags">
						            				<span class="time"><a href="#">{{$single->cast}}</a></span>
													<span class="time"><a href="#">{{$single->cast}}</a></span>
													<span class="time"><a href="#">{{$single->cast}}</a></span>
													<span class="time"><a href="#">{{$single->cast}}</a></span>
													<span class="time"><a href="#">{{$single->cast}}</a></span>
						            			</p>
						            		</div> -->
						            		<div class="ads">
												<img src="images/uploads/ads1.png" alt="">
											</div>
						            	</div>
						            </div>
						        </div>
						        <div id="biography" class="tab">
						           <div class="row">
						            	<div class="rv-hd">
											<div>
												<h3>Biography of</h3>
						       	 				<h2>{{$single->name}}</h2>
											</div>							            						
						            	</div>
						            	<p>{{$single->biography}}</p>
						            </div>
						        </div>
						        <div id="mediaceb" class="tab">
						        	<div class="row">
						        		<div class="rv-hd">
						            		<div>
						            			<h3>Biography of</h3>
					       	 					<h2>{{$single->name}}</h2>
						            		</div>
						            	</div>
						            	<!-- <div class="title-hd-sm">
											<h4>Videos</h4>
										</div>
										<div class="mvsingle-item media-item">
											<div class="vd-item">
												<div class="vd-it">
													<img class="vd-img" src="images/uploads/vd-item1.jpg" alt="">
													<a class="fancybox-media hvr-grow"  href="https://www.youtube.com/embed/o-0hcF97wy0"><img src="images/uploads/play-vd.png" alt=""></a>
												</div>
												<div class="vd-infor">
													<h6> <a href="#">{{$single->title}}</a></h6>
													<p class="time">{{$single->run_time}}</p>
												</div>
											</div>
											<div class="vd-item">
												<div class="vd-it">
													<img class="vd-img" src="images/uploads/vid2.jpg" alt="">
													<a class="fancybox-media hvr-grow" href="https://www.youtube.com/embed/o-0hcF97wy0"><img src="images/uploads/play-vd.png" alt=""></a>
												</div>
												<div class="vd-infor">
													<h6> <a href="#">Featurette: “Avengers Re-Assembled</a></h6>
													<p class="time"> 1: 03</p>
												</div>
											</div>
											<div class="vd-item">
												<div class="vd-it">
													<img class="vd-img" src="images/uploads/vid3.jpg" alt="">
													<a class="fancybox-media hvr-grow" href="https://www.youtube.com/embed/o-0hcF97wy0"><img src="images/uploads/play-vd.png" alt=""></a>
												</div>
												<div class="vd-infor">
													<h6> <a href="#">Interview: Robert Downey Jr</a></h6>
													<p class="time"> 3:27</p>
												</div>
											</div>
											<div class="vd-item">
												<div class="vd-it">
													<img class="vd-img" src="images/uploads/vid4.jpg" alt="">
													<a class="fancybox-media hvr-grow" href="https://www.youtube.com/embed/o-0hcF97wy0"><img src="images/uploads/play-vd.png" alt=""></a>
												</div>
												<div class="vd-infor">
													<h6> <a href="#">Interview: Scarlett Johansson</a></h6>
													<p class="time"> 3:27</p>
												</div>
											</div>
											<div class="vd-item">
												<div class="vd-it">
													<img class="vd-img" src="images/uploads/vid4.jpg" alt="">
													<a class="fancybox-media hvr-grow" href="https://www.youtube.com/embed/o-0hcF97wy0"><img src="images/uploads/play-vd.png" alt=""></a>
												</div>
												<div class="vd-infor">
													<h6> <a href="#">Featurette: Meet Quicksilver & The Scarlet Witch</a></h6>
													<p class="time"> 1: 31</p>
												</div>
											</div>
											<div class="vd-item">
												<div class="vd-it">
													<img class="vd-img" src="images/uploads/vid3.jpg" alt="">
													<a class="fancybox-media hvr-grow" href="https://www.youtube.com/embed/o-0hcF97wy0"><img src="images/uploads/play-vd.png" alt=""></a>
												</div>
												<div class="vd-infor">
													<h6> <a href="#">Interview: Director Joss Whedon</a></h6>
													<p class="time"> 1: 03</p>
												</div>
											</div>
											<div class="vd-item">
												<div class="vd-it">
													<img class="vd-img" src="images/uploads/vid2.jpg" alt="">
													<a class="fancybox-media hvr-grow" href="https://www.youtube.com/embed/o-0hcF97wy0"><img src="images/uploads/play-vd.png" alt=""></a>
												</div>
												<div class="vd-infor">
													<h6> <a href="#">Interview: Mark Ruffalo</a></h6>
													<p class="time"> 3:27</p>
												</div>
											</div>
											<div class="vd-item">
												<div class="vd-it">
													<img class="vd-img" src="images/uploads/vid1.jpg" alt="">
													<a class="fancybox-media hvr-grow" href="https://www.youtube.com/embed/o-0hcF97wy0"><img src="images/uploads/play-vd.png" alt=""></a>
												</div>
												<div class="vd-infor">
													<h6> <a href="#">Official Trailer #2</a></h6>
													<p class="time"> 3:27</p>
												</div>
											</div>
										</div>
										<div class="title-hd-sm">
											<h4>Photos</h4>
										</div>
										<div class="mvsingle-item">
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image11.jpg" ><img src="images/uploads/image1.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image21.jpg" ><img src="images/uploads/image2.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image31.jpg" ><img src="images/uploads/image3.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image41.jpg" ><img src="images/uploads/image4.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image51.jpg" ><img src="images/uploads/image5.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image61.jpg" ><img src="images/uploads/image6.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image71.jpg" ><img src="images/uploads/image7.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image81.jpg" ><img src="images/uploads/image8.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image91.jpg" ><img src="images/uploads/image9.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image101.jpg" ><img src="images/uploads/image10.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image111.jpg" ><img src="images/uploads/image1-1.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image121.jpg" ><img src="images/uploads/image12.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image131.jpg" ><img src="images/uploads/image13.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image141.jpg" ><img src="images/uploads/image14.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image151.jpg" ><img src="images/uploads/image15.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image161.jpg" ><img src="images/uploads/image16.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image171.jpg" ><img src="images/uploads/image17.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image181.jpg" ><img src="images/uploads/image18.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image191.jpg" ><img src="images/uploads/image19.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image201.jpg" ><img src="images/uploads/image20.jpg" alt=""></a>
											<a class="img-lightbox"  data-fancybox-group="gallery" href="images/uploads/image211.jpg" ><img src="images/uploads/image2-1.jpg" alt=""></a>
										</div> -->
						        	</div>
					       	 	</div>
					       	 	<div id="filmography" class="tab">
						        	<div class="row">
						            	<div class="rv-hd">
						            		<div>
						            			<h3>Filmography of</h3>
					       	 					<h2>{{$single->name}}</h2>
						            		</div>
										
						            	</div>
						            	<!-- <div class="topbar-filter">
											<p>Movies</p>
											<label>Filter by:</label>
											<select>
												<option value="popularity">Popularity Descending</option>
												<option value="popularity">Popularity Ascending</option>
												<option value="rating">Rating Descending</option>
												<option value="rating">Rating Ascending</option>
												<option value="date">Release date Descending</option>
												<option value="date">Release date Ascending</option>
											</select>
										</div> -->
										<!-- movie cast -->
										<div class="mvcast-item">
										@foreach($casts as $cast)											
											<div class="cast-it">
												<div class="cast-left cebleb-film">
													<img src="{{asset('images/uploads/'.$cast->movie->image)}}" alt="">
													<div>
														<a href="{{route('moviesingle',$cast->movie->id)}}">{{$cast->movie->title}}</a>
														<p class="time">{{$cast->in_role}}</p>
													</div>
												</div>
												<p>...  {{$year = strtok($cast->movie->release_date, '-')}}</p>
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
		</div>
	</div>
	</div>
</div>
<!-- celebrity single section-->

@endsection