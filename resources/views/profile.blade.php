@extends('layouts.main')

@section('title')
    <title>{{ $user->name }}'s Profile</title>
@endsection

@section('css')

    {{-- #380363d3 --}}
    {{-- rgb(230, 156, 20) --}}
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('css/profile.css') }}">



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
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="home_left_img">
                            <img style="border-radius: 50%; margin-top: -250px;" src="{{ asset(Storage::url($user->avatar)) }}" width="400px" alt="Profile Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div style="text-align: center;" class="banner_content">
                            <h2 style="color: white;">{{$user->name}}</h2>
                            <h3 style="color: white; padding-top: 5px;">{{$user->number}}</h3>
                            <a class="banner_btn" href="{{ route('edit-profile') }}">Edit Profile</a>
                        </div>
                    </div>
                </div>
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
