@extends('adminmaster')

@section('content')

		<div class="container montserratstyle-button">
			<div id="main-content">
				<!-- Form elements -->
				<div class="row col-md-12">
					<div class="panel panel-archon">
						<div class="panel-heading">
							<h3 class="panel-title montserratstyle-button">
								Manage Shoe Types
								<span class="pull-right">
									<a  href="#" class="panel-minimize"><i class="icon-chevron-up"></i></a>
								</span>
							</h3>
						</div>

						<div class="panel-body">
							<div class="row">
								<div class="col-md-12 support-tickets">
									<a href="/shoetype/create" class="btn btn-sm btn-success btn-block">
										Create Shoe Type
									</a>
									<br>
									<table class="table table-bordered table-hover table-condensed">
										<thead>
											<tr>
												<th class="icon text-center">id</th>
												<th class="icon text-center">Shoe Type Name</th>
												<th class="icon text-center">Actions</th>
											</tr>
										</thead>
										<tbody>
											@foreach($type as $type)
												<tr>
													<td class="icon text-center">{{ $type->id}}</td>
													<td class="description text-center" >{{ $type->name}}</td>
													<td class="icon text-center">
														<form role="form" action="/shoetype/{{$type->id}}/delete" method="post">
														<input type="hidden" name="_token" value="{{ csrf_token() }}">
														<a href="{{ URL::to('/shoetype/' . $type->id) . '/edit' }}" class="btn btn-info margin-button"><i class="icon-edit"></i></a>
														<button type = "submit" class="btn btn-danger margin-button"><i class="icon-trash"></i></button>
														</form>
													</td>
												</tr>
											@endforeach
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



