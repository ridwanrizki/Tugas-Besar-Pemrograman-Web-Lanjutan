<div class="col-md-3 col-sm-12 col-xs-12">
				<div class="sidebar">
					<div class="sb-search sb-it">
						<h4 class="sb-title">Search</h4>
                        <form class="form-style-1" action="{{route('search_blog')}}" method="post">
					@csrf
					<div class="row">
                            <div class="col-md-12 form-it">
                                    <label>Title</label>
                                    <input type="text" name="search_blog" placeholder="Enter Keywords...." value="{{old('search_blog')}}">
                                </div>
                                <div class="col-md-12 ">
                                    <input class="submit" type="submit" value="search">
                                </div>
                            </div>
                        </form>
					</div>
					<!-- <div class="sb-cate sb-it">
						<h4 class="sb-title">Categories</h4>
						<ul>
							<li><a href="#">Awards</a></li>
							<li><a href="#">Box office</a></li>
							<li><a href="#">Film reviews</a></li>
							<li><a href="#">News</a></li>
							<li><a href="#">Global</a></li>
						</ul>
					</div>
					<div class="sb-recentpost sb-it">
						<h4 class="sb-title">most popular</h4>
						<div class="recent-item">
							<span>01</span><h6><a href="#">Korea Box Office: Beauty and the Beast Wins Fourth</a></h6>
						</div>
						<div class="recent-item">
							<span>02</span><h6><a href="#">Homeland Finale Includes Shocking Death </a></h6>
						</div>
						<div class="recent-item">
							<span>03</span><h6><a href="#">Fate of the Furious Reviews What the Critics Saying</a></h6>
						</div>
					</div>
					<div class="sb-tags sb-it">
						<h4 class="sb-title">tags</h4>
						<ul class="tag-items">
							<li><a href="#">Batman</a></li>
							<li><a href="#">film</a></li>
							<li><a href="#">homeland</a></li>
							<li><a href="#">Fast & Furious</a></li>
							<li><a href="#">Dead Walker</a></li>
							<li><a href="#">King</a></li>
							<li><a href="#">Beauty</a></li>
						</ul>
					</div> -->
					<div class="ads">
						<img src="images/uploads/ads1.png" alt="">
					</div>
				</div>
			</div>