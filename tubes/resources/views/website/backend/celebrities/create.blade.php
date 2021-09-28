@extends('layouts.backend.main')

@section('title')

<div class="hero user-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct ">
                    <h1>Celebrity Create</h1>                        
					<ul class="breadcumb">
						<li class="active"><a href="{{route('admin.page')}}">Dashboard</a></li>
						<li class="active"> <span class="ion-ios-arrow-right"></span> <a href="{{route('celebritylist')}}">Celebrity List</a></li>
						<li> <span class="ion-ios-arrow-right"></span>Celebrity Create</li>
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
        <form method="POST" action="{{route('celebritystore')}}"  class="user" enctype="multipart/form-data">
        @csrf
            <h4>Add New Celebrity</h4>
            <div class="row">
                <div class="col-md-6 form-it {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label>Name</label>
                    <input name="name" id="name" type="text" placeholder="">
                    @if($errors->has('name'))
                     <span class="help-block">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="col-md-6 form-it {{ $errors->has('full_name') ? 'has-error' : '' }}">
                    <label>Full Name</label>
                    <input name="full_name" id="full_name" type="text" placeholder="">
                    @if($errors->has('full_name'))
                     <span class="help-block">{{ $errors->first('full_name') }}</span>
                    @endif
                </div>

            </div>
            <div class="row">
                <div class="col-md-6 form-it {{ $errors->has('country') ? 'has-error' : '' }}">
                    <label>Country</label>
                    <input name="country" id="country" type="text" placeholder="">
                    @if($errors->has('country'))
                     <span class="help-block">{{ $errors->first('country') }}</span>
                    @endif
                </div>
                <div class="col-md-6 form-it {{ $errors->has('height') ? 'has-error' : '' }}">
                    <label>Height </label>
                    <label class="pull-right">cm</label>
                    <input name="height" id="height" type="number" placeholder="">
                    @if($errors->has('height'))
                     <span class="help-block">{{ $errors->first('height') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-it {{ $errors->has('category') ? 'has-error' : '' }}">
                    <label>Category</label>
                    <select name="category" id="category" id="">
                    <option value="">---Pilih Kategori---</option>
                    <option value="Actor">Actor</option>
                    <option value="Actress">Actress</option>
                    <option value="Director">Director</option>
                    <option value="Others">Others</option>
                    </select>
                    @if($errors->has('category'))
                    <span class="help-block">{{ $errors->first('category') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 form-it {{ $errors->has('birth_date') ? 'has-error' : '' }}">
                    <label>Birth Date</label>
                    <input name="birth_date" id="birth_date" type="date" placeholder="">
                    @if($errors->has('birth_date'))
                     <span class="help-block">{{ $errors->first('birth_date') }}</span>
                    @endif
                </div>
                <div class="col-md-6 form-it">
                    <label>Death Date</label>
                    <input name="death_date" id="death_date" type="date" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-it  {{ $errors->has('image') ? 'has-error' : '' }}">
                    <label for="">Image</label>
                    <input name="image" id="image" type="file" name="image" id="">
                    @if($errors->has('image'))
                     <span class="help-block">{{ $errors->first('image') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-it  {{ $errors->has('link_facebook') ? 'has-error' : '' }}">
                    <label for="">Facebook Link</label>
                    <input name="link_facebook" id="link_facebook" type="url" name="link_facebook" id="">
                    @if($errors->has('link_facebook'))
                     <span class="help-block">{{ $errors->first('link_facebook') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-it  {{ $errors->has('link_twitter') ? 'has-error' : '' }}">
                    <label for="">Twitter Link</label>
                    <input name="link_twitter" id="link_twitter" type="url" name="link_twitter" id="">
                    @if($errors->has('link_twitter'))
                     <span class="help-block">{{ $errors->first('link_twitter') }}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-it  {{ $errors->has('link_instagram') ? 'has-error' : '' }}">
                    <label for="">Instagram Link</label>
                    <input name="link_instagram" id="link_instagram" type="url" name="link_instagram" id="">
                    @if($errors->has('link_instagram'))
                     <span class="help-block">{{ $errors->first('link_instagram') }}</span>
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
                <div class="col-md-12 form-it  {{ $errors->has('biography') ? 'has-error' : '' }}">
                    <label>Biography</label>
                    <textarea class="form-control" name="biography" id="biography" rows="4" cols="50"></textarea>
                    @if($errors->has('biography'))
                     <span class="help-block">{{ $errors->first('biography') }}</span>
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