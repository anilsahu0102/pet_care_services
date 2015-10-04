<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Pet Care Services | Login</title>
		<!-- bootstrap 3.0.2 -->
		<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/common.css') }}" rel="stylesheet" type="text/css" />
	</head>
	<body class="container">
		<!-- Mobile Layout -->
		<div class="form-box-mobile visible-xs" id="login-box">
			<h1 class="h1-title">Pet Care Services Admin Panel</h1>
			<hr class="hr-blue">
			<div class="bg-gray">
				<!-- check for login error flash var -->
				@if (Session::has('flash_error'))
					<div class="alert alert-danger">
						<a class="close" href="#" data-dismiss="alert" aria-hidden="true">&times;</a>
						{{ Session::get('flash_error') }}
					</div>
				@endif
				<!-- will be used to show any messages -->
				@if (Session::has('flash_success'))
					<div class="alert alert-success">
						<a class="close" href="#" data-dismiss="alert" aria-hidden="true">&times;</a>
						{{ Session::get('flash_success') }}
					</div>
				@endif
				{{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-horizontal', 'id'=>'frm_login', 'role'=>'form')) }}
					<div class="form-group login-form-group-top">
						<div class="col-sm-6">
							<label for="txt-user-name" class="">Username</label>
							<input class="form-control" id="txt-user-name" tabindex="1" name="txt-user-name" type="text" value="">
						</div>
						<div class="padding-top-15"></div>
						<div class="col-sm-6">
							<label for="txt-password" class="">Password</label><br/>
							<input class="form-control" id="txt-password" tabindex="2" name="txt-password" type="password" value="">
							<!-- <a href="#" title="Forgot Password" tabindex="4">
								Forgot Password?
							</a> -->
						</div>
					</div>
					<div class="form-group padding-top-15 login-form-group-bottom">
						<div class="col-sm-6">
							<input class="btn btn-primary" title="Login" tabindex="3" type="submit" value="Login">
						</div>
					</div>
				{{ Form::close()}}			
			</div>
		</div>
		<!-- End Mobile Layput -->
		
		<!-- Destop Layout -->
		<div class="form-box hidden-xs" id="login-box">
			<h1>Pet Care Services Admin Panel</h1>
			<hr class="hr-blue">
			<div class="bg-gray">
				{{ Form::open(array('action' => 'HomeController@doLogin', 'class' => 'form-horizontal', 'id'=>'frm_login', 'role'=>'form')) }}
					<!-- check for login error flash var -->
					@if (Session::has('flash_error'))
						<div class="alert alert-danger">
							<a class="close" href="#" data-dismiss="alert" aria-hidden="true">&times;</a>
							{{ Session::get('flash_error') }}
						</div>
					@endif
					<!-- will be used to show any messages -->
					@if (Session::has('flash_success'))
						<div class="alert alert-success">
							<a class="close" href="#" data-dismiss="alert" aria-hidden="true">&times;</a>
							{{ Session::get('flash_success') }}
						</div>
					@endif
					<div class="form-group login-form-group-top">
						<div class="col-sm-6">
							<label for="txt-username" class="">Username</label>						
							<input class="form-control" id="txt-user-name" tabindex="1" name="txt-user-name" type="text" value="">					
						</div>
						<div class="col-sm-6">
							<label for="txt-password" class="">Password</label><br/>
							<input class="form-control" id="txt-password" tabindex="2" name="txt-password" type="password" value="">
						</div>
					</div>
					<div class="form-group padding-top-15 login-form-group-bottom">
						<div class="col-sm-6">
							<div class="padding-top-15"></div>
							<input class="btn btn-primary" title="Login" tabindex="3" type="submit" value="Login">
						</div>
					</div>
				{{Form::close()}}	
			</div>
		</div>
		<!-- jQuery-->
		<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
		
		<!-- Bootstrap -->
		<script src="{{ asset('js/bootstrap.js') }}" type="text/javascript"></script>
	</body>
</html>