@extends('layouts.main')
@section('title')
        <title>{{trans('main.ms')}}</title>
@endsection

@section('css')
    {{-- <link rel="stylesheet" href="css/animate.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />

@endsection

@section('logo')
                    <img style="margin-top: -20px;" src="{{ asset('images/logo2.png') }}" class="logo logo-display" alt="">
                    <img style="margin-top: -10px;" src="{{ asset('images/logo2.png') }}" class="logo logo-scrolled" alt="">
@endsection

@section('content')

 <section id="hello" class="contact-banner bg-mega" style="background: url(images/ma.png)no-repeat;">
        <div class="overlay"></div>
            <div class="container">
                <div class="row">
                     <div class="main_home text-center">
                        <div class="contact_text">
                              <h1 class="text-white text-uppercase" style="margin-bottom: -200px;">{{trans('main.ms')}}</h1>
                       </div>
                </div>
             </div><!--End off row-->
       </div><!--End off container -->
</section> <!--End off Home Sections-->




        <section class="feature-destination">
        <div class="container">
            <div class="row" style="margin-top: -100px;">
               <h4 class="text-black text-uppercase text-center" style="padding-bottom: 20px;">{{trans('main.sections')}}</h4>
                <div class="col-sm-6 col-md-6 col-lg-3 element-animate ">
                    <a href="{{ route('material',['id'=>4]) }}" class="img-bg" style="background-image: url('{{ asset('/images/amaa.jpg') }}')">
                        <div class="text">
                            <span class="icon ion-ios-location"></span>
                            <h2>{{trans('main.ga')}}</h2>
                            <p style="color: #fff important;">{{trans('main.click-material')}}</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 element-animate ">
                    <a href="{{ route('material',['id'=>1]) }}" class="img-bg" style="background-image: url('{{ asset('/images/cs.png') }}')">
                        <div class="text">
                            <h2>{{trans('main.cs')}}</h2>
                            <p style="color: #fff;">{{trans('main.click-material')}}</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 element-animate ">
                    <a href="{{ route('material',['id'=>2]) }}" class="img-bg" style="background-image: url('{{ asset('/images/mm.jpg') }}')">
                        <div class="text">
                            <span class="icon ion-ios-location"></span>
                            <h2>{{trans('main.mm')}}</h2>
                            <p style="color: #fff;">{{trans('main.click-material')}}</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 element-animate ">
                    <a href="{{ route('material',['id'=>3]) }}" class="img-bg last" style="background-image: url('{{ asset('/images/st.jpg') }}')">
                        <div class="text">
                            <span class="icon ion-ios-location"></span>
                            <h2>{{trans('main.st')}}</h2>
                            <p style="color: #fff;">{{trans('main.click-material')}}</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

<br>
<br>
<br>
<br>

  <!--Our Work Section-->
    <div class="container">
        <div class="row">
            <div class="main_work">

                <div class="col-md-7 col-md-offset-5 col-sm-12 col-xs-12">
                    <div class="work_item">
                        <div class="row">
                            <div class="col-md-7 col-sm-12 col-xs-12 text-right pull-right sm-text-center">
                                <div class="work_item_img">
                                    <img src="{{ asset('/images/cs2.png') }}" alt="" />
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-12 col-xs-12 text-right pull-left sm-text-center">
                                <div class="work_item_details m-top-80 sm-m-top-20">
                                    <h4>{{trans('main.cs')}}</h4>
                                    <div class="work_separator1"></div>
                                    <p style="color:black;" class="m-top-40 sm-m-top-10">Duis autem vel eum iriure dolor in hendrerit in vulputate velit molestie consequat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End off work-item -->

                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="work_item">
                        <div class="row">
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <div class="work_item_img sm-text-center sm-m-top-40">
                                    <img src="{{ asset('images/mm300.jpg') }}" alt="" />
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-12 col-xs-12 text-left pull-left sm-text-center">
                                <div class="work_item_details m-top-80 sm-m-top-20">
                                    <h4>{{trans('main.mm')}}</h4>
                                    <div class="work_separator2"></div>
                                    <p style="color:black;" class="m-top-40 sm-m-top-10">Duis autem vel eum iriure dolor in hendrerit in vulputate velit molestie consequat</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End off work-item -->

                <div class="col-md-7 col-md-offset-5 col-sm-12 col-xs-12">
                    <div class="work_item">
                        <div class="row">
                            <div class="col-md-7 col-sm-12 col-xs-12 text-right pull-right sm-text-center">
                                <div class="work_item_img sm-m-top-40">
                                    <img src="{{ asset('images/st300.jpg') }}" alt="" />
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-12 col-xs-12 text-right pull-left sm-text-center">
                                <div class="work_item_details m-top-80 sm-m-top-20">
                                    <h4>{{trans('main.st')}}</h4>
                                    <div class="work_separator1"></div>
                                    <p style="color:black;" class="m-top-40 sm-m-top-10">Duis autem vel eum iriure dolor in hendrerit in vulputate velit molestie consequat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End off work-item -->

            </div>
        </div>
    </div>


@endsection



@section('js')

@endsection