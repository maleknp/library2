@extends('layouts.main')

@section('title')
    <title>Contact Us</title>
@endsection

@section('css')
	<link rel="icon" type="image/png" href="login2/images/icons/contact2.png"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">
@endsection

@section('logo')
                    <img style="margin-top: -20px;" src="{{ asset('images/logo2.png') }}" class="logo logo-display" alt="">
                    <img style="margin-top: -10px;" src="{{ asset('images/logo2.png') }}" class="logo logo-scrolled" alt="">
@endsection

@section('content')

    <div class="bg-contact2" style="background-image: url('{{ asset('images/444.jpg') }}');">
        <div class="container-contact2">
            <div class="wrap-contact2">
                <form action="  {{ url('/contact') }} " method="post" class="contact2-form validate-form">
                 @csrf
                    <span class="contact2-form-title">
						Contact Us
					</span>

                    <div class="wrap-input2 validate-input" data-validate="Name is required">
                        <input class="input2" type="text" name="name">
                        <span class="focus-input2" data-placeholder="NAME"></span>
                    </div>

                    <div class="wrap-input2 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input2" type="text" name="email">
                        <span class="focus-input2" data-placeholder="EMAIL"></span>
                    </div>

                    <div class="wrap-input2 validate-input" data-validate="Message is required">
                        <textarea class="input2" name="message"></textarea>
                        <span class="focus-input2" data-placeholder="MESSAGE"></span>
                    </div>

                    <div class="container-contact2-form-btn">
                        <div class="wrap-contact2-form-btn">
                            <div class="contact2-form-bgbtn"></div>
                            <button class="contact2-form-btn">
								Send Your Message
							</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="{{ asset('js/vendor/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('js/vendor/main.js') }}"></script>

@endsection