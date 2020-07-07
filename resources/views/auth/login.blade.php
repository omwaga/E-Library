@extends('layouts.master')

@section('content')
<!-- Contact Us -->
<section class="contact-us section-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-12">
                <!-- Contact Form -->
                <div class="contact-form-area m-top-30">
                    <h4>Login</h4>
                    <form  method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
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
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <div class="icon"><i class="fa fa-user"></i></div>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div><br>


                            <div class="col-md-8 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="form-group button">
                                <button type="submit" class="bizwheel-btn theme-2">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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
                        <h2 class="text-center">OR</h2>
                    <div class="button">
                        <a href="#" class="btn btn-danger btn-block">Google Login<i class="fa fa-angle-right"></i></a>
                        <a href="#" class="btn btn-info btn-block">Facebook Login<i class="fa fa-angle-right"></i></a></a>
                    </div>
                    </div>
                    <!-- Single Contact -->
                    <div class="single-contact-box">
                        <div class="c-text">
                            <h4 class="text-center">Not Registered ?</h4>
                            <p>Get Started Today!</p>
                        </div>
                    </div>
                    <!--/ End Single Contact -->
                    <div class="button text-center">
                        <a href="{{route('register')}}" class="bizwheel-btn theme-1">Register<i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 
@endsection
