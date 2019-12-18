@extends('layouts.app1')

@section('content')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;

}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>

<body>
		<!-- Page Preloder -->
		<div id="preloder">
			<div class="loader"></div>
		</div>
	
		<!-- Main section start -->
		
			<<div class="row">
				<div class="column">
						<div class="row justify-content-center">
					<div class="mb-warp">
						<a href="" class="site-logo">
							<h2>UKM</h2>
							<p>Event Planner System</p>
						</a>
						<div class="about-info">
							<h2>Group Wael</h2>
							<p>We are a group of student in UKM who are willing to help in improving the booking process.</p></div>
						
					</div>
					</div>
				</div>
			
				<!-- Left Side section end -->
				<!-- Page start -->
				
				<div class="column">
							<div class="row justify-content-center">
								<div class="col-md-10">
									<div class="card">
											<div class="card text-white bg-dark mb-3">
										<div class="card-header">{{ __('Login') }}</div>
											</div>
										<div class="card-body">
											<form method="POST" action="{{ route('login') }}">
												@csrf
						
												<div class="form-group row">
													<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
						
													<div class="col-md-6">
														<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
						
														@error('email')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
														@enderror
													</div>
												</div>
						
												<div class="form-group row">
													<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
						
													<div class="col-md-6">
														<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
						
														@error('password')
															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
														@enderror
													</div>
												</div>
						
												<div class="form-group row">
													<div class="col-md-6 offset-md-4">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
						
															<label class="form-check-label" for="remember">
																{{ __('Remember Me') }}
															</label>
														</div>
													</div>
												</div>
						
												<div class="form-group row mb-0">
													<div class="col-md-8 offset-md-4">
														<button type="submit" class="btn btn-primary">
															{{ __('Login') }}
														</button>

														<a class="btn btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
						
														@if (Route::has('password.request'))
															<a class="btn btn-link" href="{{ route('password.request') }}">
																{{ __('Forgot Your Password?') }}
															</a>
														@endif
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
				</div>
				<!-- Page end -->
			
			
	
		<!-- Main section end -->
		
		<!--====== Javascripts & Jquery ======-->
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.nicescroll.min.js"></script>
		<script src="js/circle-progress.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/main.js"></script>
	
		</body>

@endsection
