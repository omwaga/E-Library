@extends('layouts.master')
@section('content')
<!-- Contact Us -->
<section class="contact-us section-space">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-7 col-12">
				<!-- Contact Form -->
				<div class="contact-form-area m-top-30">
					<h4>Register</h4>
					<form  method="POST" action="{{ route('register') }}">
						@csrf
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<div class="icon"><i class="fa fa-user"></i></div>
									<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full Name">

									@error('name')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<div class="icon"><i class="fa fa-envelope"></i></div>
									<input  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">

									@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<div class="icon"><i class="fa fa-user"></i></div>
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

									@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="form-group">
									<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
								</div>
							</div>
							<div class="col-12">
								<div class="form-group button">
									<button type="submit" class="bizwheel-btn theme-2">Register</button>
								</div>
							</div>
						</div>
					</form>
				</div>
				<!--/ End contact Form -->
			</div>
			<div class="col-lg-5 col-md-5 col-12">
				<div class="contact-box-main m-top-30">
					<div class="contact-title">
						<h2>Social Registration</h2>
						<p>Secure Registration</p>
						<div class="button">
							<a href="#" class="btn btn-danger btn-block"><i class="fa fa-google"></i> Register with Google</a>
							<a href="#" class="btn btn-info btn-block"><i class="fa fa-facebook"></i> Register with Facebook</a></a>
						</div>
					</div>
					<!-- Single Contact -->
					<div class="single-contact-box">
						<div class="c-icon"><i class="fa fa-phone"></i></div>
						<div class="c-text">
							<h4>Call Us Now</h4>
							<p>Tel.: 888 765 4321<br> Mob.: 765 654 3451</p>
						</div>
					</div>
					<!--/ End Single Contact -->
					<div class="button">
						<a href="{{route('login')}}" class="bizwheel-btn theme-1">Already registered? Login<i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> 
@endsection
