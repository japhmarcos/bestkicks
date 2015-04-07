@extends('adminmaster')

@section('content')

		<div class="container">
			<div id="main-content">
			<form role="form" class="form-horizontal" action="/location/{{$location->id}}/edit" method="POST" enctype= "multipart/form-data">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<!-- Form elements -->
				<div class="row col-md-12">
					<div class="panel panel-archon">
						<div class="panel-heading">
							<h3 class="panel-title">
								Edit Location
								<span class="pull-right">
									<a  href="#" class="panel-minimize"><i class="icon-chevron-up"></i></a>
								</span>
							</h3>
						</div>

						<div class="panel-body">
							<div class="row">
								<div class="col-md-12 support-tickets">
									<table class="table table-bordered table-hover table-condensed">
										<thead>
											<tr>
												<th class="icon text-center"width="80%">Location</th>
												<th class="icon text-center" width="20%">Actions</th>
											</tr>
										</thead>
										<tbody>
												<tr>
													<td class="icon text-center">
														<input type="text" name = "name" class="form-control" value="{{$location->name}}">
													</td>
													<td class="icon text-center">
														<button type="" class="btn btn-success margin-button"><i class="icon-save"></i></button>
														<a href="/location" class="btn btn-warning margin-button"><i class="icon-chevron-left"></i></a>
													</td>
												</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				</form>
				</div>
			</div>
		</div>
				
@stop



