@extends('usermaster')

@section('content')

<div class="container montserratstyle-button">

		<!-- Main content starts here-->

			<div id="main-content">
				<!-- Form elements -->
				<div class="row">
						<div class="panel panel-archon">
							<div class="panel-heading">
								<h3 class="panel-title montserratstyle-button">
									List of Buyers
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
												<th width="10%">Avatar</th>
												<th width="20%">User Name</th>
												<th width="50%">Full Name</th>
												<th width="20%">Status</th>
												
												</tr>
											</thead>
											<tbody>
											@foreach ($users as $user)
												@if($user->user_types_id == "2")
												<tr>
													@if($user->display_photo == 'default_user.jpg')
													<td class="text-center"><img height="50px" width="50px" src="/images/profile/default_user.jpg"/></td>
													@else
													<td class="text-center"><img height="50px" width="50px" src="images/profile/{{$user->username}}/{{$user->display_photo}}" alt=""></td>
													@endif
													<td class="icon text-center">{{$user->username}}</td>
													<td class="description" >
													<a href="{{ URL::to('/profile/' . $user->id) }}">{{$user->firstname}} {{$user->lastname}}</a>
													</td>
													@if($user->user_statuses_id == "2")
														<td class="icon text-center"><i class="icon-ok text-info"></i> Verified</td>
													@else
														<td class="icon text-center"><i class="icon-bookmark text-info"></i> Regular</td>
													@endif
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

			</div><!-- /Main Content  @7 -->
		</div>

@endsection