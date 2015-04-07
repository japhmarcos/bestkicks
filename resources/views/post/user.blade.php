@extends($mode)

@section('content')

			<div class="container montserratstyle-button">
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-archon">
							<div class="panel-heading">
								<h3 class="panel-title montserratstyle-button">
									My Posts
									<span class="pull-right">
										<a  href="#" class="panel-minimize"><i class="icon-chevron-up"></i></a>
									</span>
								</h3>
							</div>
							<div class="panel-body gallery">
								<!-- Gallery Items -->
								<div class="row">
									<ul class="list-inline gallery-items" id="Grid">

										@foreach($posts as $posts)
											@if($posts->users_id == Auth::user()->id)
													<li  class="mix dogs " data-name="puffy">
														<div class="panel panel-archon panel-gallery ">
															<div class="panel-body">
																<img src="/images/userposts/{{$username}}/{{$posts->title}}/{{$posts->frontview}}" alt=""> 
															</div>
															<div class="panel-footer">
																<a class="montserratstyle-button" href="{{ URL::to('/post/' . $posts->id) }}">{{$posts->title}}</a>
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
			</div>


@endsection