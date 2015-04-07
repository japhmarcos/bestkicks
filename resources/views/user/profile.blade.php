@extends($mode)

@section('content')

			<div id="main-content" class="white">
				<div class="row profile-head">
				@if($user->valid_id == 'default_validid.png')
					<img src="/images/valid/default_validid.png" width="100%" height="300" alt="">
				@else
					<img src="/images/valid/{{$username}}/{{$user->valid_id}}" width="100%" height="300" alt="">
				@endif
				</div>
				<div class="row montserratstyle-button">
					<div class="col-md-8 profile-body">
						<div class="profile-info">
						@if($user->display_photo == 'default_user.jpg')
							<img src="/images/profile/default_user.jpg" class="avatar profilephoto" alt="">
						@else
							<img src="/images/profile/{{$username}}/{{$user->display_photo}}" class="avatar profilephoto" alt="">
						@endif
							<h2 class="name montserratstyle-button">
							{{ $user->firstname }} {{ $user->lastname }} 
							@if($user->user_statuses_id == 2)
								<i class="icon-ok-sign text-info"></i>
							@endif
							</h2>
							<ul class="options list-inline">
								<li><i class="icon-time"></i> Member Since {{ date("F d, Y", strtotime($user->created_at)) }}</li>
							</ul>
							<hr>
							<div class="row">
								<div class="col-md-7">
									<div class="panel panel-archon">
										<div class="panel-heading">
											<h3 class="panel-title montserratstyle-button">
												Personal Details
												<span class="pull-right">
													<a  href="#" class="panel-minimize"><i class="icon-chevron-up"></i></a>
												</span>
											</h3>
										</div>
										<div class="panel-body montserratstyle">
											<ul>
												<li>User Type: {{ $user_type->name}}</li>
												<li>Gender: {{ $user->gender }}</li>
												<li>Date of Birth: {{ date("F d, Y", strtotime($user->dateofbirth)) }}</li>
												<li>Location: {{ $location->name }}</li>
												<li>Mobile Number: {{ $user->mobilenumber }}</li>
											</ul>
											
										</div>
									</div>
								</div>
								
								<div class="col-md-5">
									<div class="panel panel-archon">
										<div class="panel-heading">
											<h3 class="panel-title montserratstyle-button">
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

			@if ($user->user_types_id == 3)
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-archon">
							<div class="panel-heading">
								<h3 class="panel-title montserratstyle-button">
									{{ $user->firstname }}'s Posts
									<span class="pull-right">
										<a  href="#" class="panel-minimize"><i class="icon-chevron-up"></i></a>
									</span>
								</h3>
							</div>
							<div class="panel-body gallery montserratstyle-button">
								<!-- Gallery Items -->
								<div class="row">
									<ul class="list-inline gallery-items" id="Grid">
										@foreach($posts as $posts)
											@if($posts->users_id == $user->id)
												<li  class="mix dogs " data-name="puffy">
													<div class="panel panel-archon panel-gallery ">
														<div class="panel-body">
															<img src="/images/userposts/{{$user->username}}/{{$posts->title}}/{{$posts->frontview}}" alt=""> 
														</div>
														<div class="panel-footer">
															<a href="{{ URL::to('/post/' . $posts->id) }}">{{$posts->title}}</a>
														</div>
													</div>
												</li>
											@endif
										@endforeach
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endif
			</div><!-- /Main Content  @7 -->

@endsection