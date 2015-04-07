@extends('adminmaster')

@section('content')

		<div class="frame">
			<div id="main-content">
			<form role="form" class="form-horizontal" action="/size/{{$size->id}}/edit" method="POST" enctype= "multipart/form-data">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<!-- Form elements -->
				<div class="col-md-4"> </div>
				<div class="row col-md-6">
					<div class="panel panel-archon">
						<div class="panel-heading">
							<h3 class="panel-title">
								Edit Size
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
												<th width="80%">Size</th>
												<th width="20%">Actions</th>
											</tr>
										</thead>
										<tbody>
												<tr>
													<td class="icon text-center">
														<input type="text" name = "name" class="form-control" value="{{$size->name}}">
													</td>
													<td>
														<button type="" class="btn btn-success pull-left margin-button"><i class="icon-save"></i></button>
														<a href="/size" class="btn btn-warning pull-left margin-button"><i class="icon-chevron-left"></i></a>
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



