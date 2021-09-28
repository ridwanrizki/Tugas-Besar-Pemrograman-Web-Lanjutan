<div class="col-md-3 col-xs-12 col-sm-12">
				<div class="sidebar">
					<div class="searh-form">
						<h4 class="sb-title">Search celebrity</h4>
						<form class="form-style-1 celebrity-form" action="{{route('search')}}" method="post">
						@csrf
							<div class="row">
								<div class="col-md-12 form-it">
									<label>Celebrity name</label>
									<input type="text" name="search" placeholder="Enter keywords.." value="{{old('search')}}">
								</div>
								<div class="col-md-12 ">
									<input class="submit" type="submit" value="search">
								</div>
							</div>
						</form>
					</div>
					<div class="ads">
						<img src="images/uploads/ads1.png" alt="">
					</div>
					<!-- <div class="celebrities">
						<h4 class="sb-title">featured celebrity</h4>
						<div class="celeb-item">
							<a href="#"><img src="images/uploads/ava1.jpg" alt=""></a>
							<div class="celeb-author">
								<h6><a href="#">Samuel N. Jack</a></h6>
								<span>Actor</span>
							</div>
						</div>
						<div class="celeb-item">
							<a href="#"><img src="images/uploads/ava2.jpg" alt=""></a>
							<div class="celeb-author">
								<h6><a href="#">Benjamin Carroll</a></h6>
								<span>Actor</span>
							</div>
						</div>
						<div class="celeb-item">
							<a href="#"><img src="images/uploads/ava3.jpg" alt=""></a>
							<div class="celeb-author">
								<h6><a href="#">Beverly Griffin</a></h6>
								<span>Actor</span>
							</div>
						</div>
						<div class="celeb-item">
							<a href="#"><img src="images/uploads/ava4.jpg" alt=""></a>
							<div class="celeb-author">
								<h6><a href="#">Justin Weaver</a></h6>
								<span>Actor</span>
							</div>
						</div>
					</div> -->
				</div>
			</div>