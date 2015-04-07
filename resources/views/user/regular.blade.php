@extends('adminmaster')

@section('content')
	
	<div class="row"> 
		<div class="col-md-3"> </div>
					<div class="col-md-6">
						<div class="panel panel-users">
							<div class="panel-heading">
								<h3 class="panel-title">List of Regular Users
									<span class="pull-right">
										<a  href="#" class="panel-minimize"><i class="icon-chevron-up"></i></a>
									</span>
								</h3>
							</div>
							<div class="panel-body">
								<table class="table users-table table-condensed table-hover " >
									<thead>
										<tr>
											<th  class="visible-lg">#</th>
											<th  class="visible-lg"></th>
											<th  class="visible-lg">User</th>
											<th  class="visible-lg">Total Transactions Made</th>
										</tr>
									</thead>
									<tbody>
			@foreach ($user as $user)
				@if($user->user_statuses_id == "1")
										<tr>
											<td class="visible-lg" align="middle">{{ $user->id}}</td>
											<td class="visible-lg" align="middle"></td>
											<td class="visible-lg" align="left">{{ $user->username}} ({{$user->firstname}} {{$user->lastname}}) </td>
											<td class="visible-lg" align="middle"></td>
											<td>
												<button type="" class="btn btn-danger pull-right margin-button"><i class="icon-trash"></i></button>
												<a href="{{ URL::to('/adminviewprofile/' . $user->id) }}" class="btn btn-warning pull-right margin-button"><i class="icon-eye-open"></i></a>
												<a href="#" class="btn btn-success pull-right margin-button"><i class="icon-ok"></i></a>
											</td>
										</tr>
				@endif
			@endforeach
									</tbody>
								</table>

							</div>
						</div>
					</div>
				</div>	<!-- / Users widget-->
				
@stop