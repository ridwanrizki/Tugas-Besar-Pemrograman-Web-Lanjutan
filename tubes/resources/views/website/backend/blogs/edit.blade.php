@extends('layouts.backend.main')

@section('title')
<div class="hero user-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct ">
                    <h1>Edit Blog</h1>                        
					<ul class="breadcumb">
						<li class="active"><a href="#">Dashboard</a></li>
						<li class="active"> <span class="ion-ios-arrow-right"></span> <a href="#">Blogs List</a></li>
						<li> <span class="ion-ios-arrow-right"></span>Blog Edit</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('detail_setting')
<div class="col-md-9 col-sm-12 col-xs-12">
    <div class="form-style-1 user-pro" action="#">
        <form method="POST" action="{{route('blogupdate',$blog->id)}}"  class="user" enctype="multipart/form-data">
        @csrf  
        @method('PUT')
            <h4>Edit Blog</h4>
            <div class="row">
                <div class="col-md-12 form-it {{ $errors->has('title') ? 'has-error' : '' }}">
                    <label>Title</label>
                    <input name="title" id="title" type="text" value="{{$blog->title}}" placeholder="">
                    @if($errors->has('title'))
                     <span class="help-block">{{ $errors->first('title') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-it {{ $errors->has('category_id') ? 'has-error' : '' }}">
                    <label>Category</label>
                    <select name="category_id" id="category_id" id="">
                    <option value="{{$blog->category_id}}" >{{$blog->category->name}}</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                    </select>
                    @if($errors->has('category_id'))
                     <span class="help-block">{{ $errors->first('category_id') }}</span>
                    @endif
                </div>
                <div class="col-md-6 form-it  {{ $errors->has('image') ? 'has-error' : '' }}">
                    <label for="">Image</label>
                    <input name="image" id="image" type="file" name="image" id="">
                    @if($errors->has('image'))
                     <span class="help-block">{{ $errors->first('image') }}</span>
                    @endif
                </div>
            </div>           
            <div class="row">
                <div class="col-md-12 form-it  {{ $errors->has('excerpt') ? 'has-error' : '' }}">
                    <label>Excerpt</label>
                    <textarea name="excerpt" id="excerpt" class="form-control" rows="4" cols="30">{{$blog->excerpt}}</textarea>
                    @if($errors->has('excerpt'))
                     <span class="help-block">{{ $errors->first('excerpt') }}</span>
                    @endif
                </div>
            </div>            
            <div class="row">
                <div class="col-md-12 form-it  {{ $errors->has('body') ? 'has-error' : '' }}">
                    <label>Body</label>
                    <textarea name="body" id="body" class="form-control" rows="4" cols="30">{{$blog->body}}</textarea>
                    @if($errors->has('body'))
                     <span class="help-block">{{ $errors->first('body') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <input class="submit" type="submit" value="save">
                </div>
            </div>	
        </form>
    </div>
</div>
@endsection