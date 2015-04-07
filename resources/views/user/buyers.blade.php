@extends('adminmaster')

@section('content')

		<div class="container montserratstyle-button">
			<div id="main-content">
				<!-- Form elements -->
				<div class="row col-md-12">
					<div class="panel panel-archon">
						<div class="panel-heading">
							<h3 class="panel-title montserratstyle-button">
								Manage Buyers
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
												<th class="icon text-center" width="10%">User Name</th>
												<th class="icon text-center" width="60%">Full Name</th>
												<th class="icon text-center" width="10%">Status</th>
												<th class="icon text-center" width="20%">Actions</th>
											</tr>
										</thead>
										<tbody>
											@foreach($users as $user)
												@if($user->user_types_id == "2")
													<tr>
														<td class="icon text-center">{{ $user->username}}</td>
														@if($user->user_statuses_id == "2")
															<td class="description icon text-center" >{{$user->firstname}} {{$user->lastname}}</td> 
															<td class="icon text-center"><i class="icon-ok text-info"></i> Verified</td>
														@else
															<td class="description icon text-center" >{{$user->firstname}} {{$user->lastname}}</td>
															<td class="icon text-center"><i class="icon-bookmark text-info"></i> Regular</td>
														@endif
														<td class="icon text-center">
																@if($user->user_statuses_id == "2")
																	<form action="/buyers/{{$user->id}}/delete" method="post">
																	<input type="hidden" name="_token" value="{{ csrf_token() }}">
																	<a href="{{ URL::to('/profile/' . $user->id) }}" class="btn btn-warning margin-button">
																	<i class="icon-eye-open"></i></a>
																	<button class="btn btn-danger margin-button"><i class="icon-trash"></i></button>
																	</form>
																@else
																	<form action="/buyers" method="POST">
																	<input type="hidden" name="_method" value="PUT" />
																	<input type="hidden" name="_token" value="{{ csrf_token() }}">
																	<input type="hidden" name="id" value="{{$user->id}}" />
																	<button type="submit" class="btn btn-success margin-button"><i class="icon-ok"></i></button>
																	</form>
																	<form action="/buyers/{{$user->id}}/delete" method="post">
																	<input type="hidden" name="_token" value="{{ csrf_token() }}">
																	<a href="{{ URL::to('/profile/' . $user->id) }}" class="btn btn-warning margin-button">
																	<i class="icon-eye-open"></i></a>
																	<button class="btn btn-danger margin-button"><i class="icon-trash"></i></button>
																	</form>
																@endif
														</td>
													</tr>
												@endif
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