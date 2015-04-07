@extends('usermaster')

@section('content')

			<div id="main-content" class="white">
				<div class="row profile-head">
				@if(Auth::user()->valid_id == 'default_validid.png')
					<img src="/images/valid/default_validid.png" width="100%" height="300" alt="">
				@else
					<img src="/images/valid/{{Auth::user()->username}}/{{Auth::user()->valid_id}}" width="100%" height="300" alt="">
				@endif
				</div>
				<div class="row">
					<div class="col-md-8 profile-body">
						<div class="profile-info">
						@if(Auth::user()->display_photo == 'default_user.jpg')
							<img src="/images/profile/default_user.jpg" class="avatar profilephoto" alt="">
						@else
							<img src="/images/profile/{{Auth::user()->username}}/{{Auth::user()->display_photo}}" class="avatar profilephoto" alt="">
						@endif	
							<h2 class="name">
							{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}
							@if(Auth::user()->user_statuses_id == 2)
								<i class="icon-ok-sign text-info"></i>
							@endif
							</h2>
							<ul class="options list-inline">
								<li><a href="#"><i class="icon-facebook-sign"></i>facebook</a></li>
								<li><a href="#"><i class="icon-twitter"></i>twitter</a></li>
								<li><i class="icon-time"></i> Member Since {{ date("F d, Y", strtotime(Auth::user()->created_at)) }}</li>
							</ul>
							<hr>
							<div class="row">
								<div class="col-md-7">
									<div class="panel panel-archon">
										<div class="panel-heading">
											<h3 class="panel-title">
												Personal Details
												<span class="pull-right">
													<a  href="#" class="panel-minimize"><i class="icon-chevron-up"></i></a>
												</span>
											</h3>
										</div>
										<div class="panel-body montserratstyle">
											<ul>
												<li>User Type: {{$user_type->name}}</li>
												<li>Gender: {{ Auth::user()->gender }}</li>
												<li>Date of Birth: {{ date("F d, Y", strtotime(Auth::user()->dateofbirth)) }}</li>
												<li>Location: {{ $location->name }}</li>
												<li>Mobile Number: {{ Auth::user()->mobilenumber }}</li>
											</ul>
											
										</div>
									</div>
								</div>
								
								<div class="col-md-5">
									<div class="panel panel-archon">
										<div class="panel-heading">
											<h3 class="panel-title">
												Transactions
												<span class="pull-right">
													<a  href="#" class="panel-minimize"><i class="icon-chevron-up"></i></a>
												</span>
											</h3>
										</div>
										<div class="panel-body montserratstyle">
											<ul>
												<li>Bought:</li>
												<li>Sold:</li>
												<li>Total:</li>
											</ul>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /Main Content  @7 -->

@endsection