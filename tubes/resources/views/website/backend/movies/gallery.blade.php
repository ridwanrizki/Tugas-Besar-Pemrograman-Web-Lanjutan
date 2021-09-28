@extends('layouts.backend.main')

@section('title')

<div class="hero user-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct ">
                    <h1>Movie Gallery</h1>                        
					<ul class="breadcumb">
						<li class="active"><a href="{{route('admin.page')}}">Dashboard</a></li>
						<li class="active"> <span class="ion-ios-arrow-right"></span> <a href="{{route('adminmovielist')}}">Movie List</a></li>
						<li> <span class="ion-ios-arrow-right"></span>Movie Gallery</li>
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
        color: white;
    }

</style>
<div class="col-md-9 col-sm-12 col-xs-12">

        @if(session('message'))
            <div class="alert alert-info">
                {{session('message')}}
            </div>
        @endif
        <div id="mediaceb" class="tab">
		<div class="row">
        <div class="title-hd-sm">
            <h4>Photos <span> ({{$photos->count()}})</span></h4>
        </div>
        <div class="mvsingle-item">

            @foreach($photos as $photo)
            <a class="img-lightbox"  data-fancybox-group="gallery" href="{{asset('images/uploads/'.$photos->image_nml)}}" ><img src="{{asset('images/uploads/'.$photos->image_nml)}}" width="100" height="100" alt=""></a>
            @endforeach
		</div>  
        </div>
        </div>
        <br>
            <div class="row btn-transform transform-vertical" style="width:15%">
                <div><a href="{{route('moviecreate')}}" class="item item-1 yellowbtn">Add New</a></div>
                <div><a href="{{route('moviecreate')}}" class="item item-2 yellowbtn"> <i class="ion-plus"></i></a></div>
			</div>	

</div>
@endsection