@extends('usermaster')

@section('content')

<div class="container">

		<!-- Main content starts here-->

			<div id="main-content">
				<!-- Form elements -->
				<form role="form" class="form-horizontal" action="/editprofile" method="POST" enctype= "multipart/form-data">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-archon">
							<div class="panel-heading">
								<h3 class="panel-title">
									Edit Profile
									<span class="pull-right">
										<a  href="#" class="panel-minimize"><i class="icon-chevron-up"></i></a>
									</span>
								</h3>
							</div>

							<div class="panel-body">
									<center><p class="montserratstyle-button">User Account</p></center><br>
									<div class="form-group">
										<label class="col-lg-3 control-label montserratstyle-button">Username</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" id="username" name = "username" value="{{ Auth::user()->username }}">
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label montserratstyle-button">Email</label>
										<div class="col-lg-9">
											<input type="email" class="form-control" id="email" name = "email"  value="{{ Auth::user()->email }}">
										</div>
									</div>

									<center><a href="/editpassword" class="btn btn-sm btn-primary pull-right montserratstyle-button">Change Password</a></center>
							</div>

							<div class="panel-body">
									<center><p class="montserratstyle-button">Personal Details</p></center><br>
									<div class="form-group">
										<label class="col-lg-3 control-label montserratstyle-button">First Name</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" id="firstname" name = "firstname" value="{{ Auth::user()->firstname }}">
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label montserratstyle-button">Middle Name</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" id="middlename" name = "middlename" value="{{ Auth::user()->middlename }}">
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label montserratstyle-button">Last Name</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" id="lastname" name="lastname" value="{{ Auth::user()->lastname }}">
										</div>
									</div>

									<div class="form-group">
										<label  class="col-lg-3 control-label montserratstyle-button">Date of Birth</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" name="dateofbirth" 
											onfocus="(this.type='date')" onblur="(this.type='text')" id="dateofbirth" name="dateofbirth" value="{{ Auth::user()->dateofbirth }}">
										</div>
									</div>

									<div class="form-group">
										<label  class="col-lg-3 control-label montserratstyle-button">Gender</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" id="gender" name="gender" value="{{ Auth::user()->gender }}">
										</div>
									</div>
							</div>

							<div class="panel-body">
									<center><p class="montserratstyle-button">Contact Information</p></center><br>
									<input type="hidden" id="user_types_id" name="user_statuses_id" value="{{ Auth::user()->user_statuses_id }}">
									
									<div class="form-group">		
											<div class="input-icon left">
											<label class="col-lg-3 control-label montserratstyle-button">Select Location</label>
											<div class="col-lg-9">
												<select name="locations_id" class="m-wrap form-control">
													@foreach ($locations as $location)
													<option value='{{ $location->id}}'>
													{{ $location->name}}
													</option>
													@endforeach
												</select>
												</div>
											</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label montserratstyle-button">Mobile Number</label>
										<div class="col-lg-9">
											<input type="text" class="form-control" id="mobilenumber" maxlength ="11" name="mobilenumber" value="{{ Auth::user()->mobilenumber }}">
										</div>
									</div>

								<hr>

								<div class="form-group">
									<label class="col-lg-3 control-label montserratstyle-button">Choose your display picture</label>
									<div class="col-lg-2">
										<input class="montserratstyle-button" type="file" name="display_photo" id="display_photo">
									</div>
									<br>
								</div>
								<div class="form-group">
									<label class="col-lg-3 control-label montserratstyle-button">Choose your cover photo</label>
									<div class="col-lg-2">
										<input class="montserratstyle-button" type="file" name="valid_id" id="valid_id">
									</div>
									<br>
								</div>
								<br>

								<center>
								@if (count($errors) > 0)
									<div class="alert alert-danger">
										<strong>Whoops!</strong> There were some problems with your input.<br><br>
										<ul>
											@foreach ($errors->all() as $error)
												<li>{	{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif
								<button type="submit" class="btn btn-hg btn-noty btn-success montserratstyle-button">
								Save Changes	
								</button>
									&nbsp;
								<a href="/userprofile" class="btn btn-hg btn-noty btn-danger montserratstyle-button">Cancel</a></center>
							</div>
							</form>
						</div>
					</div>
				</div>

			</div><!-- /Main Content  @7 -->
		</div>

@endsection