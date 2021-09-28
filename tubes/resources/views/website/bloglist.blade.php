@extends('layouts.main')

@section('content')
<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1> blog listing - list</h1>
					<ul class="breadcumb">
						<li class="active"><a href="#">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span> blog listing</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- blog list section-->
<div class="page-single">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-sm-12 col-xs-12">
                <div class="topbar-filter">
                    <p class="pad-change">Found <span>{{$list->total()}} blogs</span> in total</p>
                </div>
                @foreach ($list as $blog)
				<div class="blog-item-style-1 blog-item-style-3">
            		<img src="images/uploads/{{$blog->image}}" alt="">
            		<div class="blog-it-infor">
            			<h3><a href="{{route('blogdetail', $blog->id)}}">{{$blog->title}}</a></h3><br>
						
            			<span class="time">{{$blog->created_at}}</span>
            			<p  align="justify">{{$blog->excerpt}}</p>
            		</div>
            	</div>
                @endforeach
            	<!-- <div class="blog-item-style-1 blog-item-style-3">
            		<img src="images/uploads/bloglist-it2.jpg" alt="">
            		<div class="blog-it-infor">
            			<h3><a href="blogdetail.html">Magnolia Nabs ‘Lucky’ Starring Harry Dean Stanton</a></h3>
            			<span class="time">27 Mar 2017</span>
            			<p>Magnolia Pictures has acquired U.S. and international rights to the comedic drama Lucky John Carroll Lynch’s directorial debut. Lynch is an in-demand character actor who ...</p>
            		</div>
            	</div>
				<div class="blog-item-style-1 blog-item-style-3">
            		<img src="images/uploads/bloglist-it3.jpg" alt="">
            		<div class="blog-it-infor">
            			<h3><a href="blogdetail.html">‘Going in Style’ Tops ‘Smurfs: The Lost Village’ at Thursday Box Office</a></h3>
            			<span class="time">27 Mar 2017</span>
            			<p>New Line’s remake of “Going in Style” launched with a moderate $600,000 on Thursday night, while Sony’s animated “Smurfs: The Lost Village” debuted with $375,000 ...</p>
            		</div>
            	</div>
            	<div class="blog-item-style-1 blog-item-style-3">
            		<img src="images/uploads/bloglist-it4.jpg" alt="">
            		<div class="blog-it-infor">
            			<h3><a href="blogdetail.html">India’s National Film Awards: ‘Kaasav’ Wins Best Picture</a></h3>
            			<span class="time">27 Mar 2017</span>
            			<p>Although it sporadically errs on the side of sentimentality and simplification, "The Case for Christ" sustains interest, and even generates mild suspense ...</p>
            		</div>
            	</div>
            	<div class="blog-item-style-1 blog-item-style-3">
            		<img src="images/uploads/bloglist-it5.jpg" alt="">
            		<div class="blog-it-infor">
            			<h3><a href="blogdetail.html">‘Kong: Skull Island’ Tops $500 Million at Worldwide Box Office</a></h3>
            			<span class="time">27 Mar 2017</span>
            			<p>King Kong is still a box office giant. “Kong: Skull Island” has crossed the $500 million mark at the worldwide box office. It’s the third 2017 title to hit the milestone after Disney’s ...</p>
            		</div>
            	</div>
            	<div class="blog-item-style-1 blog-item-style-3">
            		<img src="images/uploads/bloglist-it6.jpg" alt="">
            		<div class="blog-it-infor">
            			<h3><a href="blogdetail.html">Film Review: ‘Aftermath’</a></h3>
            			<span class="time">27 Mar 2017</span>
            			<p>"Aftermath" is a plane crash movie without a plane crash. Instead, the closest we get is a scene set in the control tower, where a computer screen shows two ...</p>
            		</div>
            	</div> -->
                <div class="topbar-filter">
					<label>Blogs per page: <span>{{$list->perPage()}}</span></label>
					<div class="pagination2">
						<span>Page {{$list->currentPage()}} of {{$list->lastPage()}}</span>
						<span>{{$list->links()}}</span>
					</div>
				</div>
            	<!-- <ul class="pagination">
            		<li class="icon-prev"><a href="#"><i class="ion-ios-arrow-left"></i></a></li>
            		<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">...</a></li>
					<li><a href="#">21</a></li>
					<li><a href="#">22</a></li>
					<li class="icon-next"><a href="#"><i class="ion-ios-arrow-right"></i></a></li>
            	</ul> -->
			</div>
			@include ('layouts.includes.sidebar_blog')
		</div>
	</div>
</div>
<!--end of blog list section-->
@endsection