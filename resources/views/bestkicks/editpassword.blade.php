@extends('usermaster')

@section('content')
<div class="frame">
	<div id="main-content">
	<form role="form" class="form-horizontal" action="/editpassword" method="POST" enctype= "multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="row">
		<div class="col-md-4"></div>
					<div class="col-md-6">
						<div class="panel panel-archon">
							<div class="panel-heading">
								<h3 class="panel-title">
									Edit Password
									<span class="pull-right">
										<a  href="#" class="panel-minimize"><i class="icon-chevron-up"></i></a>
									</span>
								</h3>
							</div>

							<div class="panel-body">
									<center><p class="montserratstyle-p">User Password</p></center><br>

									<div class="form-group">
										<label class="col-lg-3 control-label">Password</label>
										<div class="col-lg-9">
											<input type="password" class="form-control" id="password"  name = "password" value="{{ Auth::user()->password }}">
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Confirm Password</label>
										<div class="col-lg-9">
											<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" value="{{ Auth::user()->password }}">
										</div>
									</div>
							</div>

								<br>

								<center>
								<button type="submit" class="btn btn-hg btn-noty btn-success">
								Save Changes
								</button>
									&nbsp;
								<a href="/editprofile" class="btn btn-hg btn-noty btn-danger">Cancel</a></center>
								<br>
							</div>
							</form>
						</div>
					</div>
				</div>
</form>
			</div><!-- /Main Content  @7 -->
		</div>
	</div>
</div>
@endsection