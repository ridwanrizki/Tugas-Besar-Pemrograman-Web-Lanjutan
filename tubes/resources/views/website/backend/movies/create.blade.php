@extends('layouts.backend.main')

@section('title')

<div class="hero user-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct ">
                    <h1>MOvie Create</h1>                        
					<ul class="breadcumb">
						<li class="active"><a href="{{route('admin.page')}}">Dashboard</a></li>
						<li class="active"> <span class="ion-ios-arrow-right"></span> <a href="{{route('adminmovielist')}}">Movie List</a></li>
						<li> <span class="ion-ios-arrow-right"></span>Movie Create</li>
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
        <form method="POST" action="{{route('moviestore')}}"  class="user" enctype="multipart/form-data">
        @csrf
            <h4>Add New movie</h4>
            <div class="row">
                <div class="col-md-6 form-it {{ $errors->has('title') ? 'has-error' : '' }}">
                    <label>Title</label>
                    <input name="title" id="title" type="text" placeholder="">
                    @if($errors->has('title'))
                     <span class="help-block">{{ $errors->first('title') }}</span>
                    @endif
                </div>
                 <div class="col-md-6 form-it {{ $errors->has('country') ? 'has-error' : '' }}">
                    <label>Country</label>
                    <input name="country" id="country" type="text" placeholder="">
                    @if($errors->has('country'))
                     <span class="help-block">{{ $errors->first('country') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-it {{ $errors->has('run_time') ? 'has-error' : '' }}">
                    <label>Run Time </label>
                    <label class="pull-right">minutes</label>
                    <input name="run_time" id="run_time" type="number" placeholder="">
                    @if($errors->has('run_time'))
                     <span class="help-block">{{ $errors->first('run_time') }}</span>
                    @endif
                </div>
                <div class="col-md-6 form-it {{ $errors->has('genre') ? 'has-error' : '' }}">
                    <label>Genre</label>
                    <select name="genre" id="genre" id="">
                    <option value="">---Pilih Genre---</option>
                    @foreach($genres as $genre)
                        <option value="{{$genre->id}}">{{$genre->name}}</option>
                    @endforeach
                    </select>
                    @if($errors->has('genre'))
                     <span class="help-block">{{ $errors->first('genre') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-it {{ $errors->has('release_date') ? 'has-error' : '' }}">
                    <label>Release Date</label>
                    <input name="release_date" id="release_date" type="date" placeholder="">
                    @if($errors->has('release_date'))
                     <span class="help-block">{{ $errors->first('release_date') }}</span>
                    @endif
                </div>
                <div class="col-md-6 form-it {{ $errors->has('mmpa_ratings') ? 'has-error' : '' }}">
                    <label>MMPA Rating</label>
                    <input name="mmpa_ratings" id="mmpa_ratings" type="text" placeholder="">
                    @if($errors->has('mmpa_ratings'))
                     <span class="help-block">{{ $errors->first('mmpa_ratings') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-it  {{ $errors->has('image') ? 'has-error' : '' }}">
                    <label for="">Poster </label>
                    <input name="image" id="image" type="file" name="image" id="">
                    @if($errors->has('image'))
                     <span class="help-block">{{ $errors->first('image') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-it  {{ $errors->has('trailer') ? 'has-error' : '' }}">
                    <label for="">Trailer Embed Link </label>
                    <input name="trailer" id="trailer" type="url" name="trailer" id="">
                    @if($errors->has('trailer'))
                     <span class="help-block">{{ $errors->first('trailer') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-it  {{ $errors->has('excerpt') ? 'has-error' : '' }}">
                    <label>Excerpt</label>
                    <textarea name="excerpt" id="excerpt" class="form-control" rows="4" cols="50"></textarea>
                    @if($errors->has('excerpt'))
                     <span class="help-block">{{ $errors->first('excerpt') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-it  {{ $errors->has('body') ? 'has-error' : '' }}">
                    <label>Description</label>
                    <textarea class="form-control" name="body" id="body" rows="4" cols="50"></textarea>
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