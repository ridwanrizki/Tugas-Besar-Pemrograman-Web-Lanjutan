<div class="col-md-4 col-sm-12 col-xs-12">
	<div class="sidebar">
		<div class="searh-form">
			<h4 class="sb-title">Search for movie</h4>
			<!--form search-->
				<form class="form-style-1" action="{{route('cari')}}" method="post">
					@csrf
					<div class="row">
						<div class="col-md-12 form-it">
							<label>Movie name</label>
							<input type="text" name="cari" placeholder="Search...." value="{{old('cari')}}">
						</div>
						<div class="col-md-12 ">
							<input class="submit" type="submit" value="cari">
						</div>
					</div>
				</form>
		</div>
	</div>
</div>