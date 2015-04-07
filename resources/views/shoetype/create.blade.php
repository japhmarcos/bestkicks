@extends('adminmaster')

@section('content')

		<div class="condition">
			<div id="main-content">
			<form role="form" class="form-horizontal" action="/shoetype/create" method="POST" enctype= "multipart/form-data">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="row col-md-12">
					<div class="panel panel-archon">
						<div class="panel-heading">
							<h3 class="panel-title">
								Create Shoe Type
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
												<th class="icon text-center" width="80%">Shoe Type</th>
												<th class="icon text-center" width="20%">Actions</th>
											</tr>
										</thead>
										<tbody>
												<tr>
													<td class="icon text-center">
														<input type="text" class="form-control" name = "name" placeholder="Enter shoe type here">
													</td>
													<td class="icon text-center">
														<button type="" class="btn btn-primary margin-button"><i class="icon-plus"></i></button>
														<a href="/shoetype" class="btn btn-warning margin-button"><i class="icon-chevron-left"></i></a>
													</td>
												</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
				
@stop



