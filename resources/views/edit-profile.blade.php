@extends('layouts.main')

@section('title')
    <title>Edit-{{$user->name}}-Profile</title>
@endsection

@section('css')

    {{-- #380363d3 --}}
    {{-- rgb(230, 156, 20) --}}
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('css/profile.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('add1/css/main.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('login2/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('login2/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">


@endsection


@section('logo')
                    <img style="margin-top: -20px;" src="{{ asset('images/logo2.png') }}" class="logo logo-display" alt="">
                    <img style="margin-top: -10px;" src="{{ asset('images/logo2.png') }}" class="logo logo-scrolled" alt="">
@endsection


@section('content')

    <!--================Home Banner Area =================-->
    <section id="hello" class="home bg-mega"style="background-image: url('images/poa22.png'); height: 900px;">
        <div style="background-color: rgba(51, 51, 51, 0.192);" class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="main_home text-center">



    <section class="home_banner_area">
        <div class="banner_inner">
                    <div class="col-lg-6">
                        <div class="home_left_img">
                            <img style="border-radius: 50%; margin-top: -300px;" src="{{ asset(Storage::url($user->avatar)) }}" width="400px" alt="Profile Image">
                        </div>
                    </div>


            <div style="margin-top: -30px;" class="col-lg-6">
               <form style="text-align:center;" action="  {{ url('edit1/'. $user->id) }} " method="post" enctype="multipart/form-data" class="contact100-form validate-form">
                 @method('PATCH')
                 @csrf
                    <span style="color: white; margin-bottom: -20px; margin-top: -10px; font-size: 25px;" class="contact100-form-title">
						Edit-{{$user->name}}-Profile
					</span>

                    <div class="wrap-input100 validate-input" data-validate="Course Code is required">
                        <input id="name" class="input100" type="text" name="name" placeholder="Enter Name" value="{{$user->name}}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Course Code is required">
                        <input id="number" class="input100" type="text" name="number" placeholder="Registration Number" value="{{$user->number}}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-newspaper" aria-hidden="true"></i>
						</span>
                    </div>
                   
                    <div class="wrap-input100 validate-input" data-validate="Profile image is required">
                        <input class="input100" type="file" name="avatar" placeholder="Profile image">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-image" aria-hidden="true"></i>
						</span>
                    </div>


                    <div style="margin-top: -20px;" class="container-contact100-form-btn">
                        <button class="contact100-form-btn">
							Edit Complete
						</button>
                    </div>
                </form>



                    </div>
                </div>

    </section>


    </div>
    </div>
    </div>
    </section>
    <!--================End Home Banner Area =================-->

@endsection

@section('js')

@endsection
