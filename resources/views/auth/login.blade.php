<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Login</title>
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
	<link href="/css/pages/login-soft.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL STYLES -->
	<link rel="shortcut icon" href="/images/favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<div class="logo">
		<!-- PUT YOUR LOGO HERE -->
</div>

<!-- BEGIN DEFAULT -->
<div class="content">
	
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>OOPS!</strong> Please enter your complete credentials.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="/auth/login">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<h3 class="form-title">Login to your account</h3>
						<div class="control-group">
							<div class="input-icon left">
								<i class="icon-envelope"></i>
								<input type="email" class="form-control m-wrap placeholder-no-fix" name="email" 
								value="{{ old('email') }}" placeholder="Email">
							</div>
						</div>

						<div class="control-group">
							<div class="input-icon left">
								<i class="icon-lock"></i>
								<input type="password" class="form-control m-wrap placeholder-no-fix"
								name="password" placeholder="Password">
							</div>
						</div>

						<div class="form-group form-actions">
									<label class="checkbox">
										<input type="checkbox" name="remember"> Remember Me
									</label>
									<button type="submit" class="btn blue pull-right">
									Login <i class="m-icon-swapright m-icon-white"></i>
									</button>
						</div>

						<div class="form-group forget-password">
							<h4>Forgot your password ?</h4>
							<p>
							no worries, click 
								<a href="/password/email">here</a>
								to reset your password.<br>
								Don't have an account yet? Click
								<a href="/register">here</a>
								to register.
							</p>
						</div>
					</form>
	</div>

<!-- END DEFAULT -->
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
