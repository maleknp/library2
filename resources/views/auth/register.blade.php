@extends('layouts.main')


@section('css')

<title>Signup</title>

   <style>
    #a:hover{
        color: grey;
	}
   </style>

	<link rel="icon" type="image/png" href="login2/images/icons/signup1.png"/>
<!--===============================================================================================-->
	{{-- <link rel="stylesheet" type="text/css" href="{{ asset('login2/vendor/bootstrap/css/bootstrap.min.css') }}"> --}}
<!--===============================================================================================-->
	{{-- <link rel="stylesheet" type="text/css" href="{{ asset('login2/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}"> --}}
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login2/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login2/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('login2/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login2/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login2/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('login2/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login2/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('login2/css/main.css') }}">


@endsection

@section('logo')
                    <img style="margin-top: -20px;" src="images/logo2.png" class="logo logo-display" alt="">
                    <img style="margin-top: -10px;" src="images/logo2.png" class="logo logo-scrolled" alt="">
@endsection


@section('content')

	<div class="limiter">
		<div class="container-login100" style="background-image: url('{{ asset('images/2.jpg') }}');">
			<div style="padding-top: 100px;" class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Signup
				</span>
				<form method="POST" action="{{ route('register') }}" class="login100-form validate-form p-b-33 p-t-5">
                @csrf

					<div class="wrap-input100 validate-input" data-validate = "Enter Name">
						<input id="name" class="input100" type="text" value="{{ old('name') }}" name="name" placeholder="Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red; padding-left: 35px;">{{ $message }}</strong>
                                    </span>
                                @enderror

						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter Registration Number">
						<input id="number" class="input100" type="text" name="number" value="{{ old('number') }}" placeholder="Registration Number">
						<span class="focus-input100" data-placeholder="&#xe822;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter E-Mail">
						<input id="email" class="input100" type="text" name="email" value="{{ old('email') }}" placeholder="E-Mail Address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red; padding-left: 35px;">{{ $message }}</strong>
                                    </span>
                                @enderror

						<span class="focus-input100" data-placeholder="&#xe818;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input id="password" class="input100" type="password" name="password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red; padding-left: 35px;">{{ $message }}</strong>
                                    </span>
                                @enderror

						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Confirm password">
						<input id="password-confirm" class="input100" type="password" name="password_confirmation" placeholder="Confirm-Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
				

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Signup
						</button>

					<div style="margin-top: 10px; margin-bottom: -20px;" class="container-login100-form-btn m-t-32">
                            @if (Route::has('password.request'))
                                <a id="a" class="btn btn-link" href="{{ route('login') }}">
                                    {{ __('Already have Account!') }}
                                </a>
                             @endif
                    </div>

					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

@endsection

@section('js')

<!--===============================================================================================-->
	{{-- <script src="{{ asset('login2/vendor/jquery/jquery-3.2.1.min.js') }}"></script> --}}
<!--===============================================================================================-->
	<script src="{{ asset('login2/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login2/vendor/bootstrap/js/popper.js') }}"></script>
	{{-- <script src="{{ asset('login2/vendor/bootstrap/js/bootstrap.min.js') }}"></script> --}}
<!--===============================================================================================-->
	<script src="{{ asset('login2/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login2/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('login2/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login2/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login2/js/main.js') }}"></script>

@endsection
