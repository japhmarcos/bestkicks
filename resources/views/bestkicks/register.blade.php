<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Register</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="/plugins/select2/select2_metro.css" />
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="/css/pages/register-soft.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL STYLES -->
	<link rel="shortcut icon" href="/images/favicon.ico" />
</head>


<body class="register">
	<!-- BEGIN LOGO -->
	<div class="logo">
		<!-- PUT YOUR LOGO HERE -->
	</div>
	<!-- END LOGO -->

	<div class="content">
		<!-- BEGIN REGISTRATION FORM -->
		<form role="form" class="form-vertical login-form" action="/register" method="POST">
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
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<h3 >Sign Up</h3>
			<label>Enter your account details below:</label>
			<div class="control-group">
					<div class="input-icon left">
						<i class="icon-user"></i>
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="Username" name="username"
						value="{{ old('username') }}"/>
					</div>
			</div>
			
			<div class="control-group">
					<div class="input-icon left">
						<i class="icon-envelope"></i>
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="Email" name="email"
						value="{{ old('email') }}"/>
					</div>
			</div>
				
			<div class="control-group">
					<div class="input-icon left">
						<i class="icon-lock"></i>
						<input class="m-wrap placeholder-no-fix" type="password" autocomplete="off" id="register_password"
						 placeholder="Password" name="password"/>
					</div>
			</div>
			<div class="control-group">	
					<div class="input-icon left">
						<i class="icon-ok"></i>
						<input class="m-wrap placeholder-no-fix" type="password" autocomplete="off" 
						placeholder="Re-type Your Password" name="password_confirmation"/>
					</div>
			</div>	
			
			<label>Enter your personal details below:</label>
			
			<div class="control-group">	
					<div class="input-icon left">
						<i class="icon-font"></i>
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="First Name" name="firstname"
						value="{{ old('firstname') }}"/>
					</div>
			</div>
			
			<div class="control-group">	
					<div class="input-icon left">
						<i class="icon-font"></i>
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="Middle Name" name="middlename"
						value="{{ old('middlename') }}"/>
					</div>
			</div>
			
			<div class="control-group">		
					<div class="input-icon left">
						<i class="icon-font"></i>
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="Last Name" name="lastname"
						value="{{ old('lastname') }}"/>
					</div>
			</div>

			<div class="control-group">		
					<div class="input-icon left">
						<i class="icon-calendar"></i>
						<input class="m-wrap placeholder-no-fix" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" 
						type="text" placeholder="Date of Birth" name="dateofbirth"/>
					</div>
			</div>

			<div class="control-group">		
					<div class="input-icon left">
						<i class="icon-user"></i>
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="Gender: M or F" name="gender" maxlength="1"
						value="{{ old('gender') }}"/>
					</div>
			</div>	
			
			<label>Enter your contact details below:</label>
			
			<div class="control-group">	
					<div class="input-icon left">
						<i class="icon-mobile-phone"></i>
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="Landline (For Companies Only)" name="landline" maxlength="18"
						value="{{ old('landline') }}"/>
					</div>
			</div>

			<div class="control-group">	
					<div class="input-icon left">
						<i class="icon-mobile-phone"></i>
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="11-Digit Mobile Number" name="mobilenumber" maxlength="11"
						value="{{ old('mobilenumber') }}"/>
					</div>
			</div>

			<div class="control-group">		
					<div class="input-icon left">
						<label>Select User Type:</label>
						<select name="user_types_id" class="m-wrap">
							<option value="2">Buyer</option>
							<option value="3">Seller</option>
						</select>
					</div>
			</div>

			<div class="control-group">		
					<div class="input-icon left">
					<label>Select Location</label>
						<select name="locations_id" class="m-wrap">
							@foreach ($locations as $location)
							<option value='{{ $location->id}}'>
							{{ $location->name}}	
							</option>
							@endforeach
						</select>
					</div>
			</div>

			<div class="control-group">	
			<input type="hidden" name="user_statuses_id" value="1">
				<a href="/auth/login" class="btn blue">Login</a>
				<button type="submit" class="btn green pull-right">
				Sign Up <i class="m-icon-swapright m-icon-white"></i>
				</button>
			</div>       
		</form>
		<!-- END REGISTRATION FORM -->       
		
		
	</div>
	<!-- END LOGIN -->
	<!-- BEGIN COPYRIGHT -->
	<div class="copyright">
		2015 &copy; Best Kicks &copy; 
	</div>
	<!-- END COPYRIGHT -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   <script src="/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	<!--[if lt IE 9]>
	<script src="assets/plugins/excanvas.min.js"></script>
	<script src="assets/plugins/respond.min.js"></script>  
	<![endif]-->   
	<script src="/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	
	<script src="/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="/plugins/select2/select2.min.js"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="/scripts/app.js" type="text/javascript"></script>
	<script src="/scripts/login-soft.js" type="text/javascript"></script>      
	<!-- END PAGE LEVEL SCRIPTS --> 
	<script>
		jQuery(document).ready(function() {     
		  App.init();
		  Login.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>