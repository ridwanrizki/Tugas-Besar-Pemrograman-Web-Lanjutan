@extends('layouts.backend.main')

@section('title')

<div class="hero user-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct ">
                    <h1>Blog List</h1>                        
					<ul class="breadcumb">
                        <li class="active"><a href="{{route('admin.page')}}">Dashboard</a></li>
						<li> <span class="ion-ios-arrow-right"></span>Blog List</li>
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

    td span a{
        color : #f1ffa3;
    }

    td span a:hover{
        color: white
    }

</style>
<div class="col-md-9 col-sm-12 col-xs-12">
<div class="topbar-filter user">
        <p>Found <span>{{$blogs->total()}}</span> in total &emsp;|&emsp; Showing <span>{{$blogs->count()}}</span> data</p>
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
                                <td><span><b>Excerpt</b></span></td>
                                <td><span><b>Category</b></span></td>
                                <td><span><b>Action</b></span></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blogs as $blog)
                            <tr>
                                <td><span><a href="">{{$blog->title}}</a></span></td>
                                <td><span>{{Str::of($blog->excerpt)->words(7)}}</span></td>
                                <td><span>{{$blog->category->name}}</span></td>
                                <td>
                                    <a href="{{route('blogdelete', $blog->id)}}" class="btn del">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <a href="{{route('blogedit', $blog->id)}}" class="btn see">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            <div class="row btn-transform transform-vertical" style="width:15%">
                <div><a href="{{route('blogcreate')}}" class="item item-1 yellowbtn">Add New</a></div>
                <div><a href="{{route('blogcreate')}}" class="item item-2 yellowbtn"> <i class="ion-plus"></i></a></div>
			</div>	
    <div class="box-footer">
        <div class="pull-right">
            <ul class="pagination2 no-margin">
                {{ $blogs->links("pagination::bootstrap-4")}}
            </ul>
        </div>
    </div>
</div>
@endsection