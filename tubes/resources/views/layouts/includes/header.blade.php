<header class="ht-header full-width-hd">
		<div class="row">
			<nav id="mainNav" class="navbar navbar-default navbar-custom">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header logo">
				    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					    <span class="sr-only">Toggle navigation</span>
					    <div id="nav-icon1">
							<span></span>
							<span></span>
							<span></span>
						</div>
				    </div>
				    <a href="/"><img class="logo" src="{{ asset('../../gambar/FILMRECENZO (4)_nobg.png') }}" alt="" width="119" height="58"></a>
			    </div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav flex-child-menu menu-left">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
                        <li><a href="/">Home</a></li>	
						<li class="dropdown first">
							<a href="{{ route('movielist') }}">
							movies</a>
						</li>
						<li class="dropdown first">
							<a href="{{ route('celeblist') }}">
							celebrities
							</a>
						</li>
						<li class="dropdown first">
							<a href="{{ route('bloglist') }}">
							blogs
							</a>
						</li>
					</ul>
					<ul class="nav navbar-nav flex-child-menu menu-right">               
						@guest
                        <li><a href="{{ route('login') }}">LOG In</a></li>
						<li><a href="{{ route('register') }}">sign up</a></li>
                        @else
							@role('admin')
							<li><a href="{{route('admin.page')}}">Dashboard</a></li>
							@else
							<li><a href="{{route('user.page')}}">Dashboard</a></li>
							@endrole
                        <li><a href="" style="pointer-events: none"><u>Hi! &nbsp;{{Auth::user()->username}}</u></a></li>
                        <li class="btn"><a href="{{ route('logout') }}" 
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Log Out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        </form>
                        </li>
                        @endguest
					</ul>
				</div>
			<!-- /.navbar-collapse -->
	    </nav>
        <div class="top-search">
	    	<select>
				<option value="united">TV show</option>
				<option value="saab">Others</option>
			</select>
			<input type="text" placeholder="Search for a movie, TV Show or celebrity that you are looking for">
	    </div>
		</div>
	
</header>