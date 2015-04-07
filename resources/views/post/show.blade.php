@extends($mode)

@section('content')

		<!-- Main content starts here-->
			<div id="main-content" class="white">
				<!-- Profile -->
				<div class="row profile-head">
				@foreach($users as $user)
					@if($user->id == $posts->users_id)
						@if($user->valid_id == 'default_validid.png')
						<img src="/images/valid/default_validid.png" width="100%" height="300" alt="">
						@else
						<img src="/images/valid/{{$user->username}}/{{$user->valid_id}}" width="100%" height="300" alt="">
						@endif
					@endif
				@endforeach	
				</div>
				<div class="row">
					<div class="col-md-8 profile-body">
						<div class="profile-info">
							@foreach($users as $user)
								@if($user->id == $posts->users_id)
									@if($user->display_photo == 'default_user.jpg')
									<img src="/images/profile/default_user.jpg" class="avatar profilephoto" alt="">
									@else
									<img src="/images/profile/{{$user->username}}/{{$user->display_photo}}" class="avatar profilephoto"  alt="">
									@endif
								@endif
							@endforeach
							<h2 class="name montserratstyle-button">
							<form role="form" class="form-horizontal" action="/post/{{$posts->id}}" method="POST" enctype= "multipart/form-data">
							<input type="hidden" name="_method" value="PUT" />
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="hidden" name="id" value="{{$posts->id}}" />

							{{$posts->title}}
							@foreach($users as $user)
	                            @if($user->id == $posts->users_id)
									@if(Auth::user()->id == $user->id)
										@if($posts->statuses_id == 1)
										<button type="submit" class="btn btn-success margin-button disabled">
										<i class="icon-long-arrow-up"></i> Up</button>
										<button type="submit" class="btn btn-danger margin-button">
										<i class="icon-ban-circle"></i> Sold</button>
										@else
										<button type="submit" class="btn btn-danger margin-button disabled">
										<i class="icon-ban-circle"></i> Sold</button>
										<button type="submit" class="btn btn-success margin-button">
										<i class="icon-long-arrow-up"></i> Up</button>
										@endif
									@else
										@if($posts->statuses_id == 2)
										<label class="external-event">sold</label>
										@endif
									@endif
								@endif
                        	@endforeach
							</form>
							</h2>

							@foreach($users as $user)
	                            @if($user->id == $posts->users_id || Auth::user()->user_types_id == 1)
									@if(Auth::user()->id == $posts->users_id)
										<a href="{{ URL::to('/editpost/' . $posts->id) }}" 
										class="btn btn-sm btn-warning pull-right montserratstyle-button">
										<i class="icon-edit"></i> Edit Post</a>
									@endif
								@endif
                        	@endforeach
                        	@if(Auth::user()->user_types_id == 1)
											<form action="/post/{{$posts->id}}/delete" method="post">
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
											<button class="btn btn-sm btn-danger margin-button pull-right montserratstyle-button">
											<i class="icon-trash"> </i>Delete</button>
											</form>
							@endif
							<ul class="options nav-list montserratstyle-button">
								<li>
									<a>
										<i class="icon-user"></i> Posted by: 
										@foreach($users as $user)
                            				@if($user->id == $posts->users_id)
                                				{{$user->firstname}} {{$user->lastname}}
                            				@endif
                        				@endforeach
									</a>
								</li>
								<li>
									<a>
										<i class="icon-asterisk"></i> Description: 
										{{$posts->description}}
									</a>
								</li>
								<li>
									<a>
										<i class="icon-dollar"></i> Price: 
										{{$posts->price}}
									</a>
								</li>
								<li>
									<a>
										<i class="icon-pencil"></i> Color: 
										@foreach($colors as $color)
				                            @if($color->id == $posts->colors_id)
				                                {{$color->name}}
				                            @endif
				                        @endforeach
									</a>
								</li>
								<li>
									<a>
										<i class="icon-resize-full"></i> Size: 
										@foreach($sizes as $size)
				                            @if($size->id == $posts->sizes_id)
				                                {{$size->name}}
				                            @endif
				                        @endforeach
									</a>
								</li>
								<li>
									<a>
										<i class="icon-star"></i> Brand: 
										@foreach($brands as $brand)
				                            @if($brand->id == $posts->brands_id)
				                                {{$brand->name}}
				                            @endif
				                        @endforeach
									</a>
								</li>
								<li>
									<a>
										<i class="icon-refresh"></i> Condition: 
										@foreach($conditions as $condition)
				                            @if($condition->id == $posts->conditions_id)
				                                {{$condition->name}}/10
				                            @endif
				                        @endforeach
									</a>
								</li>
								<li>
									<a>
										<i class="icon-truck"></i> Location: 
										@foreach($locations as $location)
				                            @if($location->id == $posts->locations_id)
				                                {{$location->name}}
				                            @endif
				                        @endforeach
									</a>
								</li>
								<li>
									<a>
										<i class="icon-pencil"></i> Type: 
										@foreach($types as $shoetype)
				                            @if($shoetype->id == $posts->shoe_types_id)
				                                {{$shoetype->name}}
				                            @endif
				                        @endforeach
									</a>
								</li>
							</ul>
							<ul class="options list-inline montserratstyle-button">
								<li><a><i class="icon-time"></i> Posted on {{ date("F d, Y", strtotime($posts->created_at)) }}</a></li>
								<li><a><i class="icon-time"></i> Last updated {{ date("F d, Y", strtotime($posts->updated_at)) }}</a></li>
							</ul>
							<hr>

							<div class="row">
						<!-- Comment Box -->
						<div class="col-md-12">
								<div class="panel panel-archon panel-chat ">
									<div class="panel-heading">
										<h3 class="panel-title montserratstyle-button">Comment Box
											<span class="pull-right">
												<a  href="#" class="panel-minimize"><i class="icon-chevron-up"></i></a>
											</span>
										</h3>
									</div>
									<div class="panel-body">
										<div class="message-column">
											<div class="user-block">
													<i class="icon-star text-info"></i>
												<span class="username montserratstyle-button">{{$posts->title}}
												</span>
											</div><!-- /User Block -->
											<div class="messages">
												<ul class="list-unstyled">
													@foreach ($comments as $comment)
														@if ($comment->posts_id == $posts->id)
															@foreach($users as $user)
																@if($comment->users_id == $user->id)
													<li>
														@if($user->display_photo == 'default_user.jpg')
														<img src="/images/profile/default_user.jpg" class="avatar profilephoto" alt="">
														@else
														<img src="/images/profile/{{$user->username}}/{{$user->display_photo}}" class="avatar profilephoto"  alt="">
														@endif
														
														<form role="form" action="/post/{{$comment->id}}/comment/delete" method="post">
														<input type="hidden" name="_token" value="{{ csrf_token() }}">
														<input type="hidden" name="comment_id" value="{{$comment->id}}">
														<div class="message montserratstyle-button">
															<span class="username">	
																		{{$user->username}}
																@endif
															@endforeach

															</span>
															<span class="time pull-right">
																{{ date("F d, Y", strtotime($comment->created_at)) }} 
																@if(Auth::user()->id == $comment->users_id ||
																$posts->users_id == Auth::user()->id ||
																Auth::user()->user_types_id == 1)
																<button class = "btn btn-xs btn-default glyphicon glyphicon-remove"> </button>
																@endif
															</span>
															<p>
																{{$comment->content}}
															</p>
														</div>
														</form>
													</li>
														@endif
													@endforeach
												</ul>
											</div>
											<div class="composer">
												<form role="form" action="/post/{id}" method="POST">
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
													<div class="input-group">
														<input type="hidden" name="_token" value="{{ csrf_token() }}">
														<input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
														<input type="hidden" name="posts_id" value="{{ $posts->id }}">
														<input type="text" name="content" class="form-control text-input" placeholder="Write a comment...">
														<span class="input-group-btn">
															<button type="submit" class="btn btn-info message-send montserratstyle-button">Post</button>
														</span>
													</div><!-- /input-group -->
												</form>
											</div>
										</div><!-- /Message column -->
									</div><!-- / Panel Body -->
								</div><!-- /Panel -->
							</div><!-- /Comment Box -->
						</form>

						</div>

						</div>
					</div>
					<div class="col-md-4 montserratstyle">
						<div class="panel panel-archon alert-top">
							<div class="panel-heading">
								<h3 class="panel-title montserratstyle-button">
									{{$posts->title}}
								</h3>
							</div>
							<div class="panel-body">
								@foreach($users as $user)
								@if($user->id == $posts->users_id)
								<ul class='timeline'>
									<li class="year"></li>
									<li class="event">
										<a href="#" title="christian fei">
											Front View <img class='no-box centered' src="/images/userposts/{{$user->username}}/{{$posts->title}}/{{$posts->frontview}}" alt="Front View">
										</a>
									</li>
									<li class="event">
										<a href="#" title="christian fei">
											Back View <img class='no-box centered' src="/images/userposts/{{$user->username}}/{{$posts->title}}/{{$posts->backview}}" alt="Back View">
										</a>
									</li>
									<li class="event">
										<a href="#" title="christian fei">
											Sole View <img class='no-box centered' src="/images/userposts/{{$user->username}}/{{$posts->title}}/{{$posts->soleview}}" alt="Sole View">
										</a>
									</li>
									<li class="event">
										<a href="#" title="christian fei">
											Right View <img class='no-box centered' src="/images/userposts/{{$user->username}}/{{$posts->title}}/{{$posts->rightview}}" alt="Right View">
										</a>
									</li>
									<li class="event">
										<a href="#" title="christian fei">
											Left View <img class='no-box centered' src="/images/userposts/{{$user->username}}/{{$posts->title}}/{{$posts->leftview}}" alt="Left View">
										</a>
									</li>
									<li class="event">
										<a href="#" title="christian fei">
											Top View <img class='no-box centered' src="/images/userposts/{{$user->username}}/{{$posts->title}}//{{$posts->topview}}" alt="Top View">
										</a>
									</li>
								</ul>
								@endif
                        		@endforeach
							</div>
						</div>
					</div>
				</div>

				<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h5 class="modal-title">Panel Settings</h5>
								<span class="small">Some sort of settings with a form</span>
							</div>
							<div class="modal-body">
								<form class="form-horizontal" role="form">
									<div class="form-group">
										<label for="inputEmail1" class="col-lg-2 control-label">Label</label>
										<div class="col-lg-10">
											<input type="email" class="form-control" id="inputEmail1" placeholder="Label">
										</div>
									</div>
									<div class="form-group">
										<label for="inputPassword1" class="col-lg-2 control-label">Second Label</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" id="inputPassword1" placeholder="Label two">
										</div>
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Save changes</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->

			</div><!-- /Main Content  @7 -->

@endsection