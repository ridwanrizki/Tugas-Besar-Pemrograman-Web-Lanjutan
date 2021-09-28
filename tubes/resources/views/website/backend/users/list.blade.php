@extends('layouts.backend.main')

@section('title')

<div class="hero user-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct ">
                    <h1>User List</h1>                        
					<ul class="breadcumb">
                        <li class="active"><a href="{{route('admin.page')}}">Dashboard</a></li>
						<li> <span class="ion-ios-arrow-right"></span>User List</li>
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

</style>
<div class="col-md-9 col-sm-12 col-xs-12">
<div class="topbar-filter user">
        <p>Found <span>{{$users->total()}}</span> in total &emsp;|&emsp; Showing <span>{{$users->count()}}</span> data</p>
</div>
        <div class="row tbl">
                    <table class="table">
                        <thead>
                            <tr>
                                <td><span><b>Name</b></span></td>
                                <td><span><b>Username</b></span></td>
                                <td><span><b>Email</b></span></td>
                                <td><span><b>State</b></span></td>
                                <td><span><b>Country</b></span></td>
                                <td><span><b>Action</b></span></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td><span>{{Str::of($user->name)->limit(15)}}</span></td>
                                <td><span>{{$user->username}}</span></td>
                                <td><span>{{Str::of($user->email)->limit(15)}}</span></td>
                                <td><span>{{Str::of($user->state)->limit(15)}}</span></td>
                                <td><span>{{Str::of($user->country)->limit(15)}}</span></td>
                                <td>
                                    <a href="{{route('userdelete', $user->id)}}" class="btn del">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <a href="{{route('userdetail', $user->id)}}" class="btn see">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
    <div class="box-footer">
        <div class="pull-right">
            <ul class="pagination2 no-margin">
                {{ $users->links("pagination::bootstrap-4")}}
            </ul>
        </div>
    </div>
</div>
@endsection