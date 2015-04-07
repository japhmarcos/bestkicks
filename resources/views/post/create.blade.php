@extends('usermaster')

@section('content')

	<div class="container">

		<!-- Main content starts here-->

			<div id="main-content">
				<!-- Form elements -->
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-archon">
							<div class="panel-heading">
								<h3 class="panel-title">
									Create Post
									<span class="pull-right">
										<a  href="#" class="panel-minimize"><i class="icon-chevron-up"></i></a>
									</span>
								</h3>
							</div>
							<div class="panel-body">
								<form role="form" class="form-horizontal" action="/post/create" method="POST" enctype= "multipart/form-data">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
								<input type="hidden" name="statuses_id" value="1">
									<div class="form-group">
										<label class="col-lg-3 control-label montserratstyle-button">Title</label>
										<div class="col-lg-9">
											<input name = "title" class="form-control" rows="3" placeholder="Title">
										</div>
									</div>
									<div class="form-group">
										<label  class="col-lg-3 control-label montserratstyle-button">Brand</label>
										<div class="col-lg-9">
											<select class="form-control" name = "brands_id">
												@foreach ($brands as $brand)
												<option value="{{ $brand->id}}">
												{{ $brand->name}}
												</option>
												@endforeach
											</select>
										</div>
									</div>

									<div class="form-group">
										<label  class="col-lg-3 control-label montserratstyle-button">Size</label>
										<div class="col-lg-9">
											<select class="form-control" name = "sizes_id">
											@foreach ($sizes as $size)
												<option value="{{ $size->id}}">
												{{ $size->name}}
												</option>
											@endforeach
											</select>
										</div>
									</div>

									<div class="form-group">
										<label  class="col-lg-3 control-label montserratstyle-button">Condition</label>
										<div class="col-lg-9">
											<select class="form-control" name = "conditions_id">
											@foreach ($conditions as $condition)
												<option value="{{ $condition->id}}">
												{{ $condition->name}}
												</option>
											@endforeach
											</select>
										</div>
									</div>

									<div class="form-group">
										<label  class="col-lg-3 control-label montserratstyle-button">Color</label>
										<div class="col-lg-9">
											<select class="form-control" name = "colors_id">
											@foreach ($colors as $color)
												<option value="{{ $color->id}}">
												{{ $color->name}}
												</option>
											@endforeach
											</select>
										</div>
									</div>

									<div class="form-group">
										<label  class="col-lg-3 control-label montserratstyle-button">Type</label>
										<div class="col-lg-9">
											<select class="form-control" name = "shoe_types_id">
											@foreach ($types as $type)
												<option value="{{ $type->id}}">
												{{ $type->name}}
												</option>
											@endforeach
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label montserratstyle-button">Location</label>
										<div class="col-lg-9">
											<select class="form-control" name = "locations_id">
											@foreach ($locations as $location)
												<option value="{{ $location->id}}">
												{{ $location->name}}
												</option>
											@endforeach
											</select>
										</div>
									</div>


									<div class="form-group">
										<label class="col-lg-3 control-label montserratstyle-button">Price</label>
										<div class="col-lg-9 input-group">
									      <div class="input-group-addon">₱</div>
									      <input type="text" name = "price" class="form-control" id="exampleInputAmount"
									       placeholder="Amount" maxlength="6">
									      <div class="input-group-addon">.00</div>
									    </div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label montserratstyle-button">Description</label>
										<div class="col-lg-9">
											<textarea name="description" class="form-control" rows="3" 
											 placeholder="Other details about your shoes..." maxlength="45"></textarea>
										</div>
									</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="panel panel-archon">
							<div class="panel-heading">
								<h3 class="panel-title">
									Upload your images here
									<span class="pull-right">
										<a  href="#" class="panel-minimize"><i class="icon-chevron-up"></i></a>
									</span>
								</h3>
							</div>
							<div class="panel-body montserratstyle-button">
								Front View:
								<input class="montserratstyle-button" type="file" name="frontview" id="frontview">
								<hr>
							    Back View:
							    <input class="montserratstyle-button" type="file" name="backview" id="backview">
							    <hr>
							    Sole View:
							    <input class="montserratstyle-button" type="file" name="soleview" id="soleview">
							    <hr>
							    Right View:
							    <input class="montserratstyle-button" type="file" name="rightview" id="rightview">
							    <hr>
							    Left View:
							    <input class="montserratstyle-button" type="file" name="leftview" id="leftview">
							    <hr>
							    Top View:
							    <input class="montserratstyle-button" type="file" name="topview" id="topview">
							    <hr>
							</div>
						</div>
					</div>
					<center>
					@if (count($errors) > 0)
						<div class="alert alert-danger montserratstyle">
							<strong>Whoops!</strong> There were some problems with your input.
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<button type="submit" class="btn btn-hg btn-noty btn-success montserratstyle-button">
					Post
					</button>
						&nbsp;
					<a href="/post/all" class="btn btn-hg btn-noty btn-danger montserratstyle-button">Cancel</a></center>
					</form>
				</div>

			</div><!-- /Main Content  @7 -->
		</div>


@endsection