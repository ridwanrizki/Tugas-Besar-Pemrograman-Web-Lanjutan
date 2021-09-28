@extends('layouts.backend.main')

@section('title')

<div class="hero user-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct ">
                    <h1>Celebrity List</h1>                        
					<ul class="breadcumb">
                        <li class="active"><a href="{{route('admin.page')}}">Dashboard</a></li>
						<li> <span class="ion-ios-arrow-right"></span>Celebrity List</li>
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
        <p>Found <span>{{$celebs->total()}}</span> in total &emsp;|&emsp; Showing <span>{{$celebs->count()}}</span> data</p>
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
                                <td><span><b>Name</b></span></td>
                                <td><span><b>Country</b></span></td>
                                <td><span><b>Category</b></span></td>
                                <td><span><b>Action</b></span></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($celebs as $celeb)
                            <tr>
                                <td><span><a href="">{{$celeb->name}}</a></span></td>
                                <td><span>{{Str::of($celeb->country)->limit(15)}}</span></td>
                                <td><span>{{$celeb->category}}</span></td>
                                <td>
                                    <a href="{{route('celebritydelete', $celeb->id)}}" class="btn del">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <a href="{{route('celebrityedit', $celeb->id)}}" class="btn see">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            <div class="row btn-transform transform-vertical" style="width:15%">
                <div><a href="{{route('celebritycreate')}}" class="item item-1 yellowbtn">Add New</a></div>
                <div><a href="{{route('celebritycreate')}}" class="item item-2 yellowbtn"> <i class="ion-plus"></i></a></div>
			</div>	
    <div class="box-footer">
        <div class="pull-right">
            <ul class="pagination2 no-margin">
                {{ $celebs->links("pagination::bootstrap-4")}}
            </ul>
        </div>
    </div>
</div>
@endsection