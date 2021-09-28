@extends('layouts.backend.main')

@section('title')

<div class="hero user-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct ">
                    <h1>Movie List</h1>                        
					<ul class="breadcumb">
                        <li class="active"><a href="{{route('admin.page')}}">Dashboard</a></li>
						<li> <span class="ion-ios-arrow-right"></span>Movie List</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('detail_setting')
<style>
    .tbl{
        font-family: "Noto Sans", sans-serif;
        color: white; 
    }

    .tbl thead{
        color : #dcf836;
    }

    .del{
        color: #961219;
    }

    .del:hover{
        color: #ff4d4d;
    }

    .see{
        color: #0e518f;
    }

    .see:hover{
        color : #2f96f7;
    }

    .pho{
        color: #be8b2b;
    }

    .pho:hover{
        color : #ddb05c;
    }

    td span a{
        color : #f1ffa3;
    }

    td span a:hover{
        color: white
    }

</style>
<div class="col-md-9 col-sm-12 col-xs-12">
<div class="topbar-filter user">
        <p>Found <span>{{$movies->total()}}</span> in total &emsp;|&emsp; Showing <span>{{$movies->count()}}</span> data</p>
</div>
        @if(session('message'))
            <div class="alert alert-info">
                {{session('message')}}
            </div>
        @endif
        <div class="row tbl">
                    <table class="table">
                        <thead>
                            <tr>
                                <td><span><b>Title</b></span></td>
                                <td><span><b>Country</b></span></td>
                                <td><span><b>Genre</b></span></td>
                                <td><span><b>Action</b></span></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($movies as $movie)
                            <tr>
                                <td><span><a href="">{{$movie->title}}</a></span></td>
                                <td><span>{{Str::of($movie->country)->limit(15)}}</span></td>
                                <td><span>{{$movie->genre->name}}</span></td>
                                <td>
                                    <a href="{{route('moviedelete', $movie->id)}}" class="btn del">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <a href="{{route('movieedit', $movie->id)}}" class="btn see">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <!-- <a href="{{route('moviegallery', $movie->id)}}" class="btn pho">
                                        <i class="fa fa-photo"></i>
                                    </a> -->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            <div class="row btn-transform transform-vertical" style="width:15%">
                <div><a href="{{route('moviecreate')}}" class="item item-1 yellowbtn">Add New</a></div>
                <div><a href="{{route('moviecreate')}}" class="item item-2 yellowbtn"> <i class="ion-plus"></i></a></div>
			</div>	
    <div class="box-footer">
        <div class="pull-right">
            <ul class="pagination2 no-margin">
                {{ $movies->links("pagination::bootstrap-4")}}
            </ul>
        </div>
    </div>
</div>
@endsection