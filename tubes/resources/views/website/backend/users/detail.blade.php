@extends('layouts.backend.main')

@section('title')

<div class="hero user-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct ">
                    <h1>User Detail</h1>                        
					<ul class="breadcumb">
                        <li class="active"><a href="{{route('admin.page')}}">Dashboard</a></li>
						<li class="active"> <span class="ion-ios-arrow-right"></span> <a href="{{route('userlist')}}">User List</a></li>
						<li> <span class="ion-ios-arrow-right"></span>User Detail</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('detail_setting')
<div class="col-md-9 col-sm-12 col-xs-12">
<style>
    span a{
        color: white !important;
    }

    span a:hover{
        color: #020d18 !important;
    }

    img {
        border-radius: 5%;
    }

    table {
    table-layout: auto;
    border-collapse: collapse;
    width: 100%;
    color: white;
    }

    table td {
        border: 1px solid transparent;
    }

    table .absorbing-column {
        width: 100%;
    }
</style>
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-11">
            <div class="row">
                <table>
                    <tr>
                        <td><b>Name </b></td>
                        <td><b>:</b></td>
                        <td class="absorbing-column">{{$user->name}}</td>
                    </tr>
                    <tr>
                        <td><b>Email </b></td>
                        <td><b>:</b></td>
                        <td class="absorbing-column">{{$user->email}}</td>
                    </tr>
                    <tr>
                        <td><b>Username</b> </td>
                        <td><b>:</b></td>
                        <td class="absorbing-column">{{$user->username}}</td>
                    </tr>
                    <tr>
                        <td><b>State </b></td>
                        <td><b>:</b></td>
                        <td class="absorbing-column">{{$user->state}}</td>
                    </tr>
                    <tr>
                        <td><b>Country </b></td>
                        <td><b>:</b></td>
                        <td class="absorbing-column">{{$user->country}}</td>
                    </tr>
                </table>
            </div>
            <div class="row">
                <span><a href="{{route('userreviews',$user->id)}}" class="redbtn"> Reviews </a></span>    .     <span><a href="{{route('userfavorites',$user->id)}}" class="redbtn"> Favorites </a></span></p>
            </div>
        </div>
    </div>
</div>
    @endsection