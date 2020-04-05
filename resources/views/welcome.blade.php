@extends('layouts.main')

@section('title')
    <title>Test</title>
@endsection

@section('css')

    {{-- #380363d3 --}}
    {{-- rgb(230, 156, 20) --}}
    <link rel="stylesheet" href="{{ asset('css/com/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/com/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{  asset('css/com/comment2.css') }}">


@endsection
@section('logo')
                    <img style="margin-top: -20px;" src="{{ asset('images/logo2.png') }}" class="logo logo-display" alt="">
                    <img style="margin-top: -10px;" src="{{ asset('images/logo2.png') }}" class="logo logo-scrolled" alt="">
@endsection

@section('content')



    <!-- Start Testimonials Area -->
    <section class="testimonials_area section-gap">
        <div class="container">
            <div class="testi_slider owl-carousel">
                <div class="item">
                    <div class="testi_item">
                        <img src="img/quote.png" alt="">
                        <h4>Fanny Spencer</h4>
                        <div class="wow fadeIn" data-wow-duration="1s">
                            <p>
                                As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face <br> and She is the host to your journey.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi_item">
                        <img src="img/quote.png" alt="">
                        <h4>Fanny Spencer</h4>
                        <div class="wow fadeIn" data-wow-duration="1s">
                            <p>
                                As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face <br> and She is the host to your journey.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="testi_item">
                        <img src="img/quote.png" alt="">
                        <h4>Fanny Spencer</h4>
                        <div class="wow fadeIn" data-wow-duration="1s">
                            <p>
                                As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face <br> and She is the host to your journey.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi_item">
                        <img src="img/quote.png" alt="">
                        <h4>Fanny Spencer</h4>
                        <div class="wow fadeIn" data-wow-duration="1s">
                            <p>
                                As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face <br> and She is the host to your journey.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testi_item">
                        <img src="img/quote.png" alt="">
                        <h4>Fanny Spencer</h4>
                        <div class="wow fadeIn" data-wow-duration="1s">
                            <p>
                                As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face <br> and She is the host to your journey.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="testi_item">
                        <img src="img/quote.png" alt="">
                        <h4>Fanny Spencer</h4>
                        <div class="wow fadeIn" data-wow-duration="1s">
                            <p>
                                As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel across her face <br> and She is the host to your journey.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonials Area -->

@endsection


@section('js')

    <script src="{{ asset('js/com/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/com/superfish.min.js') }}"></script>
    <script src="{{ asset('js/com/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/com/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/com/wow.min.js') }}"></script>
    <script src="{{ asset('js/com/main.js') }}"></script>

@endsection

