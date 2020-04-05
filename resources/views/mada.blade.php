@extends('layouts.main')

@section('title')
    <title>{{$name->course_code}}</title>
@endsection

@section('css')

    <link rel="stylesheet" href="{{ asset('css/nivo-lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default/default.css') }}">

    <style>
    .body{
        background: linear-gradient(#380363d3, transparent);
    }
    </style>

@endsection

@section('logo')
                    <img style="margin-top: -20px;" src="{{ asset('images/logo2.png') }}" class="logo logo-display" alt="">
                    <img style="margin-top: -10px;" src="{{ asset('images/logo2.png') }}" class="logo logo-scrolled" alt="">
@endsection

@section('content')

    <!-- Gallery section -->
    <section id="gallery" class="parallax-section">
        <div class="container">
            <div class="row">

                <div class="col-md-12">

                    <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
                        <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
                            <h1>{{$name->course_code}}</h1>
                            <h4 style="padding: 15px 0px;">{{trans('main.we')}}</h4>
                        </div>
                    </div>

                    <!-- iso section -->
                    <div class="iso-section wow fadeInUp" data-wow-delay="0.6s">

                        <ul class="filter-wrapper clearfix">
                            <li><a href="#" data-filter="*" class="selected opc-main-bg">{{trans('main.all')}}</a></li>
                            <li><a href="#" class="opc-main-bg" data-filter=".sheet">{{trans('main.sheets')}}</a></li>
                            <li><a href="#" class="opc-main-bg" data-filter=".test">{{trans('main.tests')}}</a></li>
                            <li><a href="#" class="opc-main-bg" data-filter=".book">{{trans('main.books')}}</a></li>
                        </ul>

                        <!-- iso box section -->
                        <div class="iso-box-section wow fadeInUp" data-wow-delay="0.9s">
                            <div class="iso-box-wrapper col4-iso-box">


                          @foreach ($alls as $all)
                             @if($all->mate_id == $id && $all->number == 1)
                                @if($all->type == 'Test')
                                <div class="iso-box test  col-md-4 col-sm-6">
                                    <div style="border-radius: 15px;" class="gallery-thumb">
                                        <a href="{{ route('info', $all->id) }}" data-lightbox-gallery="food-gallery">
                                            <img style="width: 350px; height: 300px; border-radius: 15px;" src="{{ asset(Storage::url($all->img)) }}" class="fluid-img" alt="Gallery">
                                            <div class="gallery-overlay">
                                                <div class="gallery-item">
                                                    <i class="fa fa-search"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <h3>{{$all->name}}</h3>
                                
                          @auth
                            @if (Auth::user()->admin == 1)
                                <form action="{{ route('edit',['id'=>$all->id]) }}" method="get">
                                <input id="but" type="submit" style="margin-left: -100px;" class="btn btn-info" value="Edit" >
                                </form>
                                <form action="{{ route('delete',['id'=>$all->id]) }}" method="post" class="deletee">
                                <input id="delete" style="margin-top: -55px; margin-left: 100px;" type="submit" value="Delete" class="btn btn-danger">
                                  @csrf
                                  @method('DELETE')
                                </form>
                            @endif
                          @endauth
                                </div>
                                @elseif($all->type == 'Sheet')
                                <div class="iso-box sheet col-md-4 col-sm-6">
                                    <div style="border-radius: 15px;" class="gallery-thumb">
                                        <a href="{{ route('info', $all->id) }}" data-lightbox-gallery="food-gallery">
                                            <img style="width: 350px; height: 300px;" src="{{ asset('images/pdf3.png') }}" class="fluid-img" alt="Gallery">
                                            <div class="gallery-overlay">
                                                <div class="gallery-item">
                                                    <i class="fa fa-search"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <h3>{{$all->name}}</h3>

                           @auth
                            @if (Auth::user()->admin == 1)
                                <form action="{{ route('edit',['id'=>$all->id]) }}" method="get">
                                <input id="but" type="submit" style="margin-left: -100px;" class="btn btn-info" value="Edit" >
                                </form>
                                <form action="{{ route('delete',['id'=>$all->id]) }}" method="post" class="deletee">
                                <input id="delete" style="margin-top: -55px; margin-left: 100px;" type="submit" value="Delete" class="btn btn-danger">
                                  @csrf
                                  @method('DELETE')
                                </form>
                            @endif
                           @endauth
                                </div>     
                                @else
                                <div class="iso-box book col-md-4 col-sm-6">
                                    <div style="border-radius: 15px;" class="gallery-thumb">
                                        <a href="{{ route('info', $all->id) }}" data-lightbox-gallery="food-gallery">
                                            <img style="width: 350px; height: 300px;" src="{{ asset('images/pdf3.png') }}" class="fluid-img" alt="Gallery">
                                            <div class="gallery-overlay">
                                                <div class="gallery-item">
                                                    <i class="fa fa-search"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <h3>{{$all->name}}</h3>

                           @auth
                            @if (Auth::user()->admin == 1)
                                <form action="{{ route('edit',['id'=>$all->id]) }}" method="get">
                                <input id="but" type="submit" style="margin-left: -100px;" class="btn btn-info" value="Edit" >
                                </form>
                                <form action="{{ route('delete',['id'=>$all->id]) }}" method="post" class="deletee">
                                <input id="delete" style="margin-top: -55px; margin-left: 100px;" type="submit" value="Delete" class="btn btn-danger">
                                  @csrf
                                  @method('DELETE')
                                </form>
                            @endif
                           @endauth
                                </div>
                                @endif
                            @endif
                          @endforeach

                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
@auth
<form method="get" action="{{ route('add') }}">
    <div style="text-align:center;" class="container">
          <button style="text-align:center; background: rgb(230, 156, 20); color: white; font-size: 20px;" class="btn btn-outline-warning">Add</button>
    </div>
</form>
@endauth
    </section>



@endsection

@section('js')
    <script src="{{ asset('js/mada/jquery.js') }}"></script>
    <script src="{{ asset('js/mada/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/mada/isotope.js') }}"></script>
    <script src="{{ asset('js/mada/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('js/mada/nivo-lightbox.min.js') }}"></script>
    <script src="{{ asset('js/mada/jquery.parallax.js') }}"></script>
    <script src="{{ asset('js/mada/custom.js') }}"></script>
@endsection