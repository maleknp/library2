<!doctype html>
<html class="no-js" lang="{{   app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    
    {{-- #380363d3 --}}
    {{-- rgb(230, 156, 20) --}}

    <link rel="stylesheet" href="{{ asset('css/info.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <style>
    body{
        background: linear-gradient(#380363d3, transparent);
    }
    ::-moz-selection { /* Code for Firefox */
       color: white;
       background: #380363;
    }   
      ::selection {
      color: white;
      background: #380363;
    }
    </style>

                    <img style="margin-top: 20px; margin-left: 50px;" src="{{ asset('images/logo2.png') }}" class="logo logo-display" alt="">
</head>
<body>

    <!-- about_me  -->
    <div style="padding-top: 100px; padding-bottom: -100px;" class="about_me">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="about_e_details">
                    @if ($all->type == 'Test')
                        <h3 style="color: white;">{{$all->type}}:: {{$all->name}}</h3>
                    @else
                        <h3 style="color: white;">{{$all->type}} Name:: {{$all->name}}</h3>
                    @endif
                        <h3 style="color: white;">Course Code:: {{strtoupper($all->code)}}</h3>
                        <h3 style="color: white;">Section:: {{strtoupper($section->name_en)}}</h3>
                        @guest
                            <p style="color: rgb(230, 156, 20); font-size: 17px;"> you must login to download</p>
                        <div style="padding-bottom: 80px;" class="download_cv">
                        @else
                        <div style="padding-bottom: 80px;" class="download_cv">
                            <a class="boxed-btn3" style="" href="{{ route('download', $all->id) }}">Download {{$all->type}}</a>
                        @endguest
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="about_img">
                        <div class="color_pattern d-none d-lg-block">
                            <img src="{{ asset('images/color_grid.png') }}" alt="">
                        </div>
                        <div style="margin-top: -100px;" class="my_Pic">
                          @if ($all->type == 'Test')
                                <img style="border-radius: 15px;" src="{{ asset(Storage::url($all->img)) }}" height="450px" alt="">
                          @else
                            <img src="{{ asset('images/pdf3.png')}}" height="450px" alt="">
                          @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ about_me  -->


</body>
