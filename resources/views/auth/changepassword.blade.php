@extends('layouts.main')


@section('css')

<title>Change Password</title>


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
					Change Password
				</span>

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

				<form method="POST" action="{{ route('changePassword') }}" class="login100-form validate-form p-b-33 p-t-5">
                {{ csrf_field() }}

					<div class="wrap-input100 validate-input {{ $errors->has('current-password') ? ' has-error' : '' }}" data-validate="Enter Current password">
						<input id="current-password" class="input100" type="password" name="current-password" placeholder="Current Password">

                                @if ($errors->has('current-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                @endif

						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>



					<div class="wrap-input100 validate-input {{ $errors->has('new-password') ? ' has-error' : '' }}" data-validate="Enter New password">
						<input id="new-password" class="input100" type="password" name="new-password" placeholder="New Password">

                                @if ($errors->has('new-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                @endif

						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>



					<div class="wrap-input100 validate-input" data-validate="Confirm password">
						<input id="new-password-confirm" class="input100" type="password" name="new-password_confirmation" placeholder="Confirm New Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
				

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Save Changes
						</button>
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
