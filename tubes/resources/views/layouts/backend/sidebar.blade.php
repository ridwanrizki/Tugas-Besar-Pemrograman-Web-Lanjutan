<div class="col-md-3 col-sm-12 col-xs-12">
    <div class="user-information">
        <div class="user-img">
            <!-- <a href="#"><img src="{{asset ('images/uploads/user-img.png')}}" alt=""><br></a> -->
            <a href="#"><img src="{{ asset('gambar/FILMRECENZO (7)_nobg.png') }}"  width="100" height="100" alt=""><br></a>
            <a href="#" class="redbtn">{{Auth::user()->username}}</a>
        </div>
        <div class="user-fav">
            <p>Dashboard</p>
            <ul>
                @role('admin')
                    <?php $db="active"; $us=""; $mv=""; $cb=""; $bg=""; ?>
                    @if (in_array(Route::currentRouteName(), ['userlist', 'userdetail','userfavorites','userreviewes','userdelete']))
                        <?php    $db=""; $us="active"; $mv=""; $cb=""; $bg=""; ?>
                    @elseif (in_array(Route::currentRouteName(), ['adminmovielist', 'moviestore','moviefavorites','moviereviewes','moviedelete','movieupdate','moviecreate','movieedit']))
                        <?php   $db=""; $us=""; $mv="active"; $cb=""; $bg="";?>
                    @elseif (in_array(Route::currentRouteName(), ['celebritylist', 'celebritystore','celebrityfavorites','celebrityreviewes','celebritydelete','celebrityupdate','celebritycreate','celebrityedit']))
                        <?php   $db=""; $us=""; $mv=""; $cb="active"; $bg="";?>
                    @elseif (in_array(Route::currentRouteName(), ['bloglist', 'blogstore','blogfavorites','blogreviewes','blogdelete','blogupdate','blogcreate','blogedit']))
                        <?php   $db=""; $us=""; $mv=""; $cb=""; $bg="active";?>
                    @endif
                    <li class="{{$db}}"><a href="{{route('admin.page')}}">Dashboard</a></li>
                    <li class="{{$us}}"><a href="{{route('userlist')}}">Users List</a></li>
                    <li class="{{$mv}}"><a href="{{route('adminmovielist')}}">Movies List</a></li>
                    <li class="{{$cb}}"><a href="{{route('celebritylist')}}">Celebrities List</a></li>
                    <li class="{{$bg}}"><a href="{{route('blog.list')}}">Blogs List</a></li>
                @else
                <li  class="active"><a href="{{route('user.page')}}">Dashboard</a></li>
                <li><a href="{{route('user.favorites',Auth::user()->id)}}">Favorite Movies</a></li>
                <li><a href="{{route('user.reviews',Auth::user()->id)}}">Rated Movies</a></li>
                @endrole
            </ul>
        </div>
        <div class="user-fav">
            <ul>
                <li><a href="{{ route('logout') }}" 
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Log out</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
            </ul>
        </div>
    </div>
</div>