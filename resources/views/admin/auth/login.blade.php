<!doctype html>
	<html lang="en">

	<head>
		<title>:: CAR WORKSHOP :: Login</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<meta name="description" content="CAR WORKSHOP Bootstrap 4x Admin Template">
		<meta name="author" content="WrapTheme, www.thememakker.com">

		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<!-- VENDOR CSS -->
		<link rel="stylesheet" href="{{url('/')}}/assets/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{url('/')}}/assets/vendor/font-awesome/css/font-awesome.min.css">

		<!-- MAIN CSS -->
		<link rel="stylesheet" href="{{url('/')}}/assets/css/main.css">
		<link rel="stylesheet" href="{{url('/')}}/assets/css/color_skins.css">
	</head>

	<body class="theme-orange">
		<!-- WRAPPER -->
		<div id="wrapper" class="auth-main">
			<div class="container">
				<div class="row clearfix">
					<div class="col-12">
						<nav class="navbar navbar-expand-lg">
							<a class="navbar-brand" href="javascript:void(0);"><img src="{{url('/')}}/assets/images/icon-light.svg" width="50" height="50" class="d-inline-block align-top mr-2" alt="">CAR WORKSHOP</a>
							<ul class="navbar-nav">
								<li class="nav-item"><a class="nav-link" href="javascript:void(0);">Documentation</a></li>
								<li class="nav-item"><a class="nav-link" href="{{url('/register')}}">Sign Up</a></li>
							</ul>
						</nav>                    
					</div>
					<div class="col-lg-8">
						<div class="auth_detail">
							<h2 class="text-monospace">
								Everything<br> you need for
								<div id="carouselExampleControls" class="carousel vert slide" data-ride="carousel" data-interval="1500">
									<div class="carousel-inner">
										<div class="carousel-item active">your Cars</div>
										<div class="carousel-item">your Problem</div>
										<div class="carousel-item">Consultation</div>
										<div class="carousel-item">Service & Sparepart</div>
										<div class="carousel-item">Emergency</div>
									</div>
								</div>
							</h2>
							<p>All of our mechanics are experienced and well trained.
							Our services are accompanied with 3-month / 3.000 km warranty. </p>
							<ul class="social-links list-unstyled">
								<li><a class="btn btn-default" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a class="btn btn-default" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a class="btn btn-default" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="instagram"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card">
							<div class="header">
								<p class="lead">Login to your account</p>
							</div>
							<div class="body">
								<form class="form-auth-small" action="{{ route ('login')}}" method="POST">
									@csrf
									<div class="form-group">
										<label class="control-label sr-only">Email</label>
										<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

										@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="form-group">
										<label  class="control-label sr-only">Password</label>
										<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

										@error('password')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>

									<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
									<div class="bottom">
										<span>Don't have an account? <a href="{{url('/register')}}">Register</a></span>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END WRAPPER -->

		<script src="{{url('/')}}/assets/bundles/libscripts.bundle.js"></script>    
		<script src="{{url('/')}}/assets/bundles/vendorscripts.bundle.js"></script>

		<script src="{{url('/')}}/assets/bundles/mainscripts.bundle.js"></script>
	</body>
	</html>
