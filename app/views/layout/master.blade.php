<html lang="en">
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>
			@section('title')
			Pet Care Services | Admin Panel
			@show
		</title>
		<meta name="keywords" content="your, awesome, keywords, here" />
		<meta name="author" content="Jon Doe" />
		<meta name="description" content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei." />
		<meta http-equiv="cache-control" content="max-age=0" />
		<meta http-equiv="cache-control" content="no-cache" />
		<meta http-equiv="cache-control" content="no-store" />
		<meta http-equiv="cache-control" content="must-revalidate" />
		<meta http-equiv="expires" content="0" />
		<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
		<meta http-equiv="pragma" content="no-cache" />
		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- CSS
		================================================== -->
		<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
		<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
		<link href="{{ asset('css/bootstrap-theme.css') }}" rel="stylesheet">
		<link href="{{ asset('css/common.css') }}" rel="stylesheet">
		<link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">
		<link href="{{ asset('css/jquery-ui.theme.css') }}" rel="stylesheet">
		<link href="{{ asset('css/jquery.dataTables.css') }}" rel="stylesheet">
		<link href="{{ asset('css/jquery.tablesorter.pager.css') }}" rel="stylesheet">
		<link href="{{ asset('css/bootstrap-multiselect.css') }}" rel="stylesheet">

		<!-- jQuery-->
		<script type="text/javascript" src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>

	<body class="bg-white">
		<!-- Container -->
		<div class="container">
			<div class="body-container">
				<!--MOBILE MENU HERE-->
				<div class="mobile-menu visible-xs">
					<div class="header-bg margin-bottom-mobile">
						<div class="row">
							<h1 class="h1-title">Pet Care Services</h1>
						</div>
					</div>
					<div class="navbar navbar-inverse">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
					]	<div class="collapse navbar-collapse navbar-ex1-collapse">
							<ul class="nav navbar-nav">
								<li>
									<a href="#" title="Welcome Admin!">Welcome Admin!</a>
								</li>
								<li>
									<a href="{{{ URL::to('logout') }}}" title="Sign Out" >Sign Out</a>
								</li>
								<li>
									<a href="{{{ URL::to('service_type/list') }}}"  class="next-slide" title="SERVICE TYPES" >SERVICE TYPES</a>
								</li>
								<li>
									<a href="{{{ URL::to('pet_type/list') }}}"  class="next-slide" title="PET TYPES" >PET TYPES</a>
								</li>
								<li>
									<a href="allocate_service/list" class="next-slide" title="ALLOCATE A SERVICE">ALLOCATE A SERVICE</a>
								</li>
								<li>
									<a href="{{{ URL::to('service_offered') }}}" class="next-slide" title="SERVICE OFFERED" >SERVICE OFFERED</a>
								</li>
								<li>
									<a href="{{{ URL::to('service_available') }}}" class="next-slide" title="SERVICE AVAILABLE" >SERVICE AVAILABLE</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!--End Mobile Menu-->

				<!-- Navbar -->
				<div class="navbar hidden-xs white-bg">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="container-fluid header-bg">
						<div class="row user-row" id="row">
							<div class="pull-left">
								<h1 class="h1-title">Pet Care Services</h1>
							</div>
							<div class="pull-right">
								<div class="collapse navbar-collapse navbar-ex1-collapse" id="collaspe">
									<ul class="nav navbar-nav navbar-nav-top">
										<li>
											<a href="#" title="Welcome Admin!">Welcome Admin!</a>
										</li>
										<li>
											<a href="{{{ URL::to('logout') }}}" title="Sign Out" >Sign Out</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="navbar navbar-inverse">
								<div class="collapse navbar-collapse navbar-collapse-desktop navbar-ex2-collapse" id="collaspe">
									<ul class="nav navbar-nav">
										<li>
											<a href="{{{ URL::to('service_type/list') }}}"  class="next-slide" title="SERVICE TYPES" >SERVICE TYPES</a>
										</li>
										<li>
											<a href="{{{ URL::to('pet_type/list') }}}"  class="next-slide" title="PET TYPES" >PET TYPES</a>
										</li>
										<li>
											<a href="{{{ URL::to('allocate_service/list') }}}" class="next-slide" title="ALLOCATE A SERVICE" >ALLOCATE A SERVICE</a>
										</li>
										<li>
											<a href="{{{ URL::to('service_offered') }}}" class="next-slide" title="SERVICE OFFERED" >SERVICE OFFERED</a>
										</li>
										<li>
											<a href="{{{ URL::to('service_available') }}}" class="next-slide" title="SERVICE AVAILABLE" >SERVICE AVAILABLE</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>	
				</div>
				<!-- ./ navbar -->

				<!-- Header -->
				<div class="sub-container">
					<!-- Content -->
					@yield('content')
					<!--/content -->
				</div>
			</div>
			<hr>
			<!-- Footer -->
			<footer id="footer" class="hidden-print">
				<div class="container-fluid footer">
					<p class="text-left">Copyright &copy; {{date('Y')}} <!--FTI Groups - All Rights Reserved--></p>
				</div>
			</footer>
			
		</div>
		<!-- Container-->
				
		<!-- jQuery-->
		<script src="{{ asset('js/bootstrap.js') }}" type="text/javascript"></script>
		<script src="{{ asset('js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('js/jquery.tablesorter.js') }}" type="text/javascript"></script>
		<script src="{{ asset('js/jquery.tablesorter.pager.js') }}" type="text/javascript"></script>
		<script src="{{ asset('js/jquery.tablesorter.widgets.js') }}" type="text/javascript"></script>
		<script src="{{ asset('js/bootstrap-multiselect.js') }}" type="text/javascript"></script>
		<script type="text/javascript" src="{{ asset('js/common.js') }}"></script>
	</body>
</html>