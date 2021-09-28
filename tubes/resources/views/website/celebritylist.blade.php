@extends('layouts.main')

@section('content')

<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1>celebrity listing - list</h1>
					<ul class="breadcumb">
						<li class="active"><a href="#">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span> celebrity listing</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- celebrity list section-->
<div class="page-single">
	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="topbar-filter">
					<p class="pad-change">Found <span>{{$celeb->total()}} celebrities</span> in total</p>
					<label></label>
					<!-- <label>Sort by:</label>
					<select>
						<option value="popularity">Popularity Descending</option>
						<option value="popularity">Popularity Ascending</option>
						<option value="rating">Rating Descending</option>
						<option value="rating">Rating Ascending</option>
						<option value="date">Release date Descending</option>
						<option value="date">Release date Ascending</option>
					</select> -->
					<a href="{{route('celeblist')}}" class="list"><i class="ion-ios-list-outline active"></i></a>
					<!-- <a  href="celebritygrid01.html" class="grid"><i class="ion-grid "></i></a> -->
				</div>
				
				<div class="row">
					@foreach ($celeb as $celebrity)
					<div class="col-md-12">
					
						<div class="ceb-item-style-2">
						
							<img src="images/uploads/{{$celebrity->image}}" alt="">
							<div class="ceb-infor">
								<h2><a href="{{route('celebsingle', $celebrity->id)}}">{{$celebrity->name}}</a></h2>
								<span>{{$celebrity->category}}, {{$celebrity->country}}</span>
								<p  align="justify">{{$celebrity->excerpt}}</p>
							</div>
						</div>
					</div>
					@endforeach
					<!-- <div class="col-md-12">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceblist2.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Luke Evans</a></h2>
								<span>actor, mexico</span>
								<p>Luke George Evans was born in Pontypool, Wales, and grew up in Aberbargoed, in the south of Wales. He is the son of Yvonne (Lewis) and David Evans. He moved to Cardiff at the age 17...</p>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceblist3.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Scarlett Johansson</a></h2>
								<span>actress, france</span>
								<p>Scarlett Ingrid Johansson was born in New York City. Her mother, Melanie Sloan, is from a Jewish family from the Bronx, and her father, Karsten Johansson, is a Danish-born architect, from Copenhagen...</p>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceblist4.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Emma Watson</a></h2>
								<span>actress, uk</span>
								<p>Emma Charlotte Duerre Watson was born in Paris, France, to English parents, Jacqueline Luesby and Chris Watson, both lawyers. She moved to Oxfordshire when she was five...</p>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceblist5.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Tom Hardy</a></h2>
								<span>actor, italy	</span>
								<p>Joan Crawford was born Lucille Fay LeSueur on March 23, 1905, in San Antonio, Texas, to Anna Belle (Johnson) and Thomas E. LeSueur, a laundry laborer. By the time she was born her parents had separated....</p>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceblist6.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Joan Crawford</a></h2>
								<span>director, sweden</span>
								<p>Joan Crawford was born Lucille Fay LeSueur on March 23, 1905, in San Antonio, Texas, to Anna Belle (Johnson) and Thomas E. LeSueur, a laundry laborer. By the time she was born her parents had separated....</p>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceblist7.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Margot Robbie</a></h2>
								<span>actress, chile</span>
								<p>Margot Robbie is an Australian actress born in Dalby, Queensland, and raised on the Gold Coast, spending much of her time at the farm belonging to her grandparents. Her mother, Sarie Kessler, is a physiotherapist....</p>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="ceb-item-style-2">
							<img src="images/uploads/ceblist8.jpg" alt="">
							<div class="ceb-infor">
								<h2><a href="celebritysingle.html">Jason Momoa</a></h2>
								<span>actor, usa</span>
								<p>Joseph Jason Namakaeha Momoa was born on August 1, 1979 in Honolulu, Hawaii. He is the son of Coni (Lemke), a photographer, and Joseph Momoa, a painter...</p>
							</div>
						</div>
					</div> -->
				</div>
				<div class="topbar-filter">
					<!-- <label>Reviews per page:</label>
					<select>
						<option value="range">36 Reviews</option>
						<option value="saab">18 Reviews</option>
					</select> -->
					<label>Celebs per page: <span>{{$celeb->perPage()}}</span></label>
					<div class="pagination2">
						<span>Page {{$celeb->currentPage()}} of {{$celeb->lastPage()}}</span>
						<span>{{$celeb->links()}}</span>
						<!-- <span>Page 1 of 6:</span>
						<a class="active" href="#">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#">4</a>
						<a href="#">5</a>
						<a href="#">6</a>
						<a href="#"><i class="ion-arrow-right-b"></i></a> -->
					</div>
				</div>
			</div>
			@include ('layouts.includes.sidebar_cel')
		</div>
	</div>
</div>
<!-- end of celebrity list section-->

@endsection