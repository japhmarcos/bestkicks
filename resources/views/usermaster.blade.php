<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>{{$title}}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Loading Bootstrap -->
	<link href="/bootstrap/css/bootstrap.css" rel="stylesheet">

	<!-- Loading Stylesheets -->    
	<link href="/css/archon.css" rel="stylesheet">
	<link href="/css/responsive.css" rel="stylesheet">
	<link href="/css/timeline.css" rel="stylesheet">

	<!-- Loading Custom Stylesheets -->    
	<link href="/css/custom.css" rel="stylesheet">

	<link rel="shortcut icon" href="/images/favicon.ico">

	<link href="/css/webapp.css" rel="stylesheet">
	<link href="/css/style.css" rel="stylesheet">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->
</head>
<body>
	<div class="frame">
		<div class="sidebar sidebar-scroll">
			<div class="wrapper">

				<!-- Replace the src of the image with your logo -->
				<a href="/adminhome" class="logo"><img src="/images/bklogo.png" alt="Best Kicks" /></a>
				<ul class="nav nav-list">

					<!-- sidebar input search box -->
					<li class="nav-search montserratstyle-button">
						<form action="/post/search" method="POST">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="text" name="keyword" class="form-control nav-search" placeholder="Search..." >
							<span class="input-icon fui-search"></span>
						</form>
					</li>

					<!-- Sidebar header @add class nav-header for sidebar header -->
					<li class="montserratstyle-side"><a href="/userhome"><i class="icon-home"></i>Home </a></li>
					<li class="montserratstyle-side"><a href="/userprofile"><i class="icon-user"></i>My Profile </a></li>
					@if(Auth::user()->user_types_id == 2)
					<li class="montserratstyle-side"><a href="/post/all"><i class="icon-search"></i>Find Shoes</a></li>
					@else
					<li class="montserratstyle-side"><a href="/post/create"><i class="icon-exchange"></i>Post a Shoe</a></li>
					<li class="montserratstyle-side"><a href="/post/all"><i class="icon-search"></i>User Posts</a></li>
					@endif
					<li class="montserratstyle-side">
						<a href="" class="dropdown"><i class="icon-group"></i> List of Users </a>
						<ul>
							<li>
								<a  href="/userbuyers"><i class="icon-dollar"></i>Buyer</a>
  							</li>
  							<li>
								<a  href="/usersellers"><i class="icon-exchange"></i>Seller</a>
  							</li>
						</ul>	
					</li>
				</ul>

			</div><!-- /Wrapper -->
		</div><!-- /Sidebar -->

		<!-- Main content starts here-->
		<div class="content">
			<div class="navbar">
				<a href="#" onclick="return false;" class="btn pull-left toggle-sidebar "><i class="icon-list"></i></a>

				<!-- Top right user menu -->
				<ul class="nav navbar-nav user-menu pull-right">

					<li class="dropdown user-name">
						<a class="dropdown-toggle" data-toggle="dropdown">
						@if(Auth::user()->display_photo == 'default_user.jpg')
							<img src="/images/profile/default_user.jpg" class="user-avatar displayphotosmall" alt="" />
						@else
							<img src="/images/profile/{{Auth::user()->username}}/{{Auth::user()->display_photo}}"
							class="user-avatar displayphotosmall" alt="" />
						@endif
						{{ Auth::user()->username }}</a>
							<ul class="dropdown-menu right inbox user">
								<li class="user-avatar">
								@if(Auth::user()->display_photo == 'default_user.jpg')
								<img src="/images/profile/default_user.jpg" class="user-avatar displayphotolarge" alt="" />
								@else
								<img src="/images/profile/{{Auth::user()->username}}/{{Auth::user()->display_photo}}" 
									class="user-avatar displayphotolarge" alt="" />
								@endif
									{{ Auth::user()->username }}
								</li>
						@if(Auth::user()->user_types_id  == 3)	
							<li>
								<i class="icon-tasks avatar"></i>
								<div class="message">
									<span class="username"><a href="/myposts">My Posts</a></span> 
								</div>
							</li>
						@endif	
							<li>
								<i class="icon-cogs avatar"></i>
								<div class="message">
									<span class="username"><a href="/editprofile">Edit Profile</a></span>
								</div>
							</li>
							<li><a href="/auth/logout">Logout</a></li>
						</ul>
					</li><!-- / dropdown -->				
				</ul><!-- / Top right user menu -->

			</div><!-- / Navbar-->

			@yield('content')

		</div><!-- / Content @5 -->
	</div> <!-- Frame -->


	<!-- Load JS here for greater good =============================-->
	<script src="/js/jquery-1.8.3.min.js"></script>
	<script src="/js/jquery-ui-1.10.3.custom.min.js"></script>
	<script src="/js/jquery.ui.touch-punch.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/bootstrap-select.js"></script>
	<script src="/js/bootstrap-switch.js"></script>
	<script src="/js/flatui-checkbox.js"></script>
	<script src="/js/flatui-radio.js"></script>
	<script src="/js/jquery.tagsinput.js"></script>
	<script src="/js/jquery.placeholder.js"></script>
	<script src="/js/bootstrap-typeahead.js"></script>
	<script src="/js/application.js"></script>
	<script src="/js/moment.min.js"></script>
	<script src="/js/jquery.dataTables.min.js"></script>
	<script src="/js/jquery.sortable.js"></script>
	<script type="text/javascript" src="/js/jquery.gritter.js"></script>
	<script type="text/javascript" src="/js/jquery.mixitup.min.js"></script>

	<!-- Page Scripts  =============================-->
	<script src="/js/gallery-custom.js"></script>

	<!-- Archon JS =============================-->
	<script src="/js/archon.js"></script>
	<script src="/js/knobs-custom.js"></script>
	<script src="/js/sparkline-custom.js"></script>
	<script src="/js/dashboard-custom.js"></script>
</body>
</html>
