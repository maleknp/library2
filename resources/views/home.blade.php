@extends('layouts.main')

@section('title')
    <title>{{trans('main.esl')}}</title>
@endsection

@section('css')

    {{-- #380363d3 --}}
    {{-- rgb(230, 156, 20) --}}

	<link rel="icon" type="image/png" href="login2/images/icons/favicon.ico"/>
    <!--  comment styles  -->
        {{-- <link href="{{ asset('comment.css') }}" rel="stylesheet"> --}}
        <link href="{{ asset ('css/slick.css') }}" rel="stylesheet">
    <!--  comment styles End -->

    <link rel="stylesheet" href="{{ asset('css/com/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/com/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{  asset('css/com/comment2.css') }}">


@endsection

@section('logo')
                    <img style="margin-top: -20px;" src="{{ asset('images/logo2.png') }}" class="logo logo-display" alt="">
                    <img style="margin-top: -10px;" src="{{ asset('images/logo2.png') }}" class="logo logo-scrolled" alt="">
@endsection

@section('content')


    <!--Home Sections-->

    <section id="hello" class="home bg-mega" style="background: url(images/L33.png) no-repeat;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="main_home text-center">
                    <div class="home_text">


                        @auth<h1 style="margin-top: -100px; padding-bottom: 50px; font-size: 50px;" class="text-white text-uppercase">Welcome <strong style="color: orange;"> {{ $user->name }}</strong>@endauth</h1>

@if(Session::has('message'))
<p style="font-size: 15px; height: 50px; color: red; background: pink; margin-bottom: 7px; margin-top: -40px; border-radius: 25px; text-align: center;" class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif

                        @if (session('success'))
                            <div style="margin-top: -40px; font-size: 15px;" class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif


                        <h4 class="text-white text-uppercase">{{trans('main.tu')}}</h4>
                        <h1 class="text-white text-uppercase">{{trans('main.esl')}}</h1>
                        
                        <div class="separator"></div>

                        <h5 class=" text-uppercase text-white">{{trans('main.des')}}<em></em></h5>

                    </div>
                    
                </div>
            </div>
            
            <!--End off row-->
        </div>
        <!--End off container -->
    </section>
    <!--End off Home Sections-->

<br>
<br>
<br>

        <section class="feature-destination" style="background: url(images/contact3.png) no-repeat;">        
        <div class="container">
            <div class="row">
               <h3 class="text-black text-uppercase text-center" style="padding-bottom: 30px;">{{trans('main.alls')}}</h3>
                <div class="col-sm-6 col-md-6 col-lg-3 element-animate ">
                    <a href="{{ route('math') }}" class="img-bg" style="background-image: url('{{ asset('/images/ma.png') }}')">
                        <div class="text">
                            <span class="icon ion-ios-location"></span>
                            <h2>{{trans('main.ms')}}</h2>
                            <p style="color: #fff;">{{trans('main.click-section')}}</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 element-animate">
                    <a href="{{ route('nat') }}" class="img-bg" style="background-image: url('{{ asset('/images/t.jpg') }}')">
                        <div class="text">
                            <h2>{{trans('main.ns')}}</h2>
                            <p style="color: #fff;">{{trans('main.click-section')}}</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 element-animate ">
                    <a href="{{ route('life') }}" class="img-bg" style="background-image: url('{{ asset('/images/h.jpg') }}')">
                        <div class="text">
                            <span class="icon ion-ios-location"></span>
                            <h2>{{trans('main.ls')}}</h2>
                            <p style="color: #fff;">{{trans('main.click-section')}}</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 element-animate ">
                    <a href="{{ route('earth') }}" class="img-bg last" style="background-image: url('{{ asset('/images/earth.jpg') }}')">
                        <div class="text">
                            <span class="icon ion-ios-location"></span>
                            <h2>{{trans('main.es')}}</h2>
                            <p style="color: #fff;">{{trans('main.click-section')}}</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>





    <!-- Video section -->
    <section id="video" class="parallax-section">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=cgsA54CacwY"><i class="fa fa-play"></i></a>
                    <h2 class="wow fadeInUp" data-wow-delay="0.5s">{{trans('main.moc')}}</h2>
                    <h4 class="wow fadeInUp" style="color: lightgrey; margin-top: -15px;" data-wow-delay="0.8s">{{trans('main.imoc')}}</h4>
                </div>

            </div>
        </div>
    </section>





    <!-- Start Testimonials Area -->
    <a name="comment"></a>
    <section style="padding-top: 50px;" class="testimonials_area section-gap">
        <div class="container">
            <div class="testi_slider owl-carousel">

              @foreach($coments as $coments)
                <div class="item">
                    <div class="testi_item">
                        <img src="{{ asset(Storage::url($coments->img)) }}" style="width: 60px; height: 60px; border-radius: 50%; margin-bottom: 25px; border: solid 2px #380363d3;" alt="user profile">
                        <h3 style="color: #380363d3;">"{{ $coments->name  }}"</h3>
                        <div class="wow fadeIn" data-wow-duration="1s">
                            <p style="color: black; font-size: 20px;">
                            {{ $coments->comment }}
                            </p>
                        </div>
                    </div>
                </div>
               @endforeach

            </div>
        </div>
    </section>
    <!-- End Testimonials Area -->


  
    <div class="wrapper">
        <section class="contact">
            <div class="blue">
                <img src="{{ asset('images/contact.png') }}" alt="">
            </div>
            <div class="white">
                <img src="{{ asset('images/contact-shepe-white.png') }}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="contact-text">
                            <h2 style="color: #380363d3;">{{trans('main.yc')}}</h2>
                            <p style="color: grey;">{{trans('main.iyc')}}</p>
                        </div>
                    </div>


                @guest

                    <div class="col-md-8 col-sm-12">
                        <div class="contact-form">
                           <p style="color: rgb(230, 156, 20); font-size: 15px; margin-bottom: -5px; margin-top: -10px;"><b>You must be logged in to comment...</b></p>
                            <form action="  {{ url('http://localhost/library2/public/login') }} " method="get">
                               @csrf
                                <div class="checkbox-submit">
                                    <div style="margin-right: 310px !important;" class="submit">
                                        <input type="submit" value="Signin">
                                    </div>
                                </div>
                            </form>

                            <form action="  {{ url('http://localhost/library2/public/register') }} " method="get">
                               @csrf
                                <div class="checkbox-submit">
                                    <div class="submit">
                                        <input style="margin-right: 50px !important;" type="submit" value="Signup">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                  @else

                    <div class="col-md-8 col-sm-12">
                        <div class="contact-form">
                            <form action="  {{ url('/comment/auth') }} " method="post">
                               @csrf
                                 @if ($errors->count())
                                    <div class="alert alert-danger" style=" margin-top: 0px; margin-bottom: 40px;">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li style="color: red;">{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div style="margin-top: -50px;" class="message">
                                    <textarea name="comment" placeholder="{{trans('main.yc')}}"></textarea>
                                </div>
                                <div class="checkbox-submit">
                                    <div class="submit">
                                        <input type="submit" value="{{trans('main.send')}}">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                            @endguest


                </div>
            </div>
        </section>

    </div>



    <section class="ubutia-quote section bg-img" style="text-align: center; padding: 100px 0;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <img class="quote" src="{{ asset('images/quote.png') }}">
                    <p>{{trans('main.advice')}}</p>
                    <img src="{{ asset('images/mouse.png') }}">
                </div>
            </div>
        </div>
    </section>


<div>
        <img style="height: 100px; width: 1700px;" src="{{ asset('images/sum3.png') }}" alt="">
</div>

    <!-- Testimonials -->
    <a name="team"></a>
    <div style="background: #380363d3;" class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
        <h2 style="margin-top: -40px; margin-bottom: 40px; text-align: center; color: #fff;">"Activity Office Team"</h2>

                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img style="margin-bottom: 15px;" class="card-image" src="{{ asset('images/malek1.png') }}" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Member in Activity Office, Computer Science...<br>Activity Office is interested by Computer Science and volunteering to help students</p>
                                            <p class="testimonial-author">Malik Alnabouli - Web Development</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img style="margin-bottom: 15px;" class="card-image" src="{{ asset('images/ahmed2.png') }}" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Member in Activity Office, Computer Science...<br>Activity Office is interested by Computer Science and volunteering to help students</p>
                                            <p class="testimonial-author">Ahmed Kahil - Marketer</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img style="margin-bottom: 15px;" class="card-image" src="{{ asset('images/luqman.png') }}" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Member in Activity Office, Computer Science...<br>Activity Office is interested by Computer Science and volunteering to help students</p>
                                            <p class="testimonial-author">Luqman Kh - Designer</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img style="margin-bottom: 15px;" class="card-image" src="{{ asset('images/hanin.png') }}" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Member in Activity Office, Computer Science...<br>Activity Office is interested by Computer Science and volunteering to help students</p>
                                            <p class="testimonial-author">Hanen Gait - Mobile Development</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img style="margin-bottom: 15px;" class="card-image" src="{{ asset('images/ahmed1.png') }}" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Member in Activity Office, Computer Science...<br>Activity Office is interested by Computer Science and volunteering to help students</p>
                                            <p class="testimonial-author">Ahmed Sbeta - Designer</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of swiper-slide -->
                                <!-- end of slide -->


                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img style="margin-bottom: 15px;" class="card-image" src="{{ asset('images/abdo.png') }}" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Member in Activity Office, Computer Science...<br>Activity Office is interested by Computer Science and volunteering to help students</p>
                                            <p class="testimonial-author">Abdo Fties - Developer</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img style="margin-bottom: 15px;" class="card-image" src="{{ asset('images/hussain.png') }}" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Member in Activity Office, Computer Science...<br>Activity Office is interested by Computer Science and volunteering to help students</p>
                                            <p class="testimonial-author">Hussain Muftah - Web Development</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img style="margin-bottom: 15px;" class="card-image" src="{{ asset('images/ibrahim.png') }}" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Member in Activity Office, Computer Science...<br>Activity Office is interested by Computer Science and volunteering to help students</p>
                                            <p class="testimonial-author">Ibrahim Shwekh - Media</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of swiper-slide -->
                                <!-- end of slide -->


                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img style="margin-bottom: 15px;" class="card-image" src="{{ asset('images/sohaib.png') }}" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Member in Activity Office, Computer Science...<br>Activity Office is interested by Computer Science and volunteering to help students</p>
                                            <p class="testimonial-author">Sohibe Fadel - Media</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of swiper-slide -->
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img style="margin-bottom: 15px;" class="card-image" src="{{ asset('images/duaa.png') }}" alt="alternative">
                                        <div class="card-body">
                                            <p class="testimonial-text">Member in Activity Office, Computer Science...<br>Activity Office is interested by Computer Science and volunteering to help students</p>
                                            <p class="testimonial-author">Duaa Agina - AI</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of swiper-slide -->
                                <!-- end of slide -->


                            </div>
                            <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div>
                        <!-- end of swiper-container -->
                    </div>
                    <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of slider-1 -->
    <!-- end of testimonials -->

 @endsection

@section('js')

 {{-- <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script> --}}

    <!--  comment js  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script src="{{ asset('js/morphext.min.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <!--  comment js End  -->


    <script src="{{ asset('js/com/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/com/superfish.min.js') }}"></script>
    <script src="{{ asset('js/com/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/com/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/com/wow.min.js') }}"></script>
    <script src="{{ asset('js/com/main.js') }}"></script>


@endsection

  