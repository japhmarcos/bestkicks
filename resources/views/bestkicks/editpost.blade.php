@extends('usermaster')

@section('content')

	<div class="container">

		<!-- Main content starts here-->

			<div id="main-content">
			<form role="form" class="form-horizontal" action="/editpost/{{$posts->id}}" method="POST" enctype= "multipart/form-data">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<!-- Form elements -->
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-archon">
							<div class="panel-heading">
								<h3 class="panel-title">
									Edit Post
									<span class="pull-right">
										<a  href="#" class="panel-minimize"><i class="icon-chevron-up"></i></a>
									</span>
								</h3>
							</div>
							<div class="panel-body">
								<form class="form-horizontal" role="form">

									<div class="form-group">
										<label class="col-lg-3 control-label montserratstyle-button">Title</label>
										<div class="col-lg-9">
											<input type="text" name="title" class="form-control" value="{{$posts->title}}">
										</div>
									</div>

									<div class="form-group">
										<label  class="col-lg-3 control-label montserratstyle-button">Brand</label>
										<div class="col-lg-9">
										@foreach($brands as $brand)
				                            @if($brand->id == $posts->brands_id)
				                                <input type="hidden" name="brands_id" value="{{$posts->brands_id}}">
				                                <input type="text" class="form-control"
				                                placeholder="{{$brand->name}}" disabled>
				                            @endif
				                        @endforeach
										</div>
									</div>

									<div class="form-group">
										<label  class="col-lg-3 control-label montserratstyle-button">Size</label>
										<div class="col-lg-9">
										@foreach($sizes as $size)
				                            @if($size->id == $posts->sizes_id)
				                                <input type="hidden" name="sizes_id" value="{{$posts->sizes_id}}">
				                                <input type="text" class="form-control"
				                                placeholder="{{$size->name}}" disabled>
				                            @endif
				                        @endforeach
										</div>
									</div>

									<div class="form-group">
										<label  class="col-lg-3 control-label montserratstyle-button">Color</label>
										<div class="col-lg-9">
										@foreach($colors as $color)
				                            @if($color->id == $posts->colors_id)
				                                <input type="hidden" name="colors_id" value="{{$posts->colors_id}}">
				                                <input type="text" class="form-control"
				                                placeholder="{{$color->name}}" disabled>
				                            @endif
				                        @endforeach
										</div>
									</div>

									<div class="form-group">
										<label  class="col-lg-3 control-label montserratstyle-button">Type</label>
										<div class="col-lg-9">
										@foreach($types as $type)
				                            @if($type->id == $posts->shoe_types_id)
				                                <input type="hidden" name="shoe_types_id" value="{{$posts->shoe_types_id}}">
				                                <input type="text" class="form-control"
				                                placeholder="{{$type->name}}" disabled>
				                            @endif
				                        @endforeach
										</div>
									</div>

									<div class="form-group">
										<label  class="col-lg-3 control-label montserratstyle-button">Location</label>
										<div class="col-lg-9">
										@foreach($locations as $location)
				                            @if($location->id == $posts->locations_id)
				                                <input type="hidden" name="locations_id" value="{{$posts->locations_id}}">
				                                <input type="text" class="form-control"
				                                placeholder="{{$location->name}}" disabled>
				                            @endif
				                        @endforeach
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
										<label  class="col-lg-3 control-label montserratstyle-button">Price</label>
										<div class="col-lg-9 input-group">
									      <div class="input-group-addon">₱</div>
									      <input type="text" name = "price" class="form-control" id="exampleInputAmount" placeholder="Amount" value="{{$posts->price}}">
									      <div class="input-group-addon">.00</div>
									    </div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label montserratstyle-button">Description</label>
										<div class="col-lg-9">
											<textarea name="description" class="form-control"
											rows="3" maxlength="45">{{$posts->description}}</textarea>
										</div>
									</div>

								</form>
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
								<input class="montserratstyle-button" type="file" name="frontview" id="frontview" value=>
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
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<button type="submit" class="btn btn-hg btn-noty btn-success montserratstyle-button">
					Update
					</button>
						&nbsp;
					<a href="/myposts" class="btn btn-hg btn-noty btn-danger montserratstyle-button">Cancel</a></center>
				</div>
			</form>
			</div>
			</div><!-- /Main Content  @7 -->
		</div>


@endsection