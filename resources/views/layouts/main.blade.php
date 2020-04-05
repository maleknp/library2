<!doctype html>
<html class="no-js" lang="{{   app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    
     @yield('title')

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('css')
    <style>
        li{
            font-size: 15px;
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="{{ asset('css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/swiper.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/font-awesome-4.7.0/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootsnav.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>

<body class="body" data-spy="scroll" data-target=".navbar-collapse">


    <!-- Preloader -->

    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
            </div>
        </div>
    </div>

    <!--End off Preloader -->


    <!-- <div class="culmn"> -->
    <!--Home page style-->


    <nav class="navbar navbar-default navbar-fixed white no-background bootsnav text-uppercase">
        <!-- Start Top Search -->
        <div style="background: #380363d3;" class="top-search">
        <form action="{{ URL('/search') }}" method="POST">
        @csrf        
            <div class="container">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search" style="color: white;"></i></span>
                    <input type="text" name="search" class="form-control" placeholder="Search By Course Code or Course Name">
                    <span class="input-group-addon close-search"><i class="fa fa-times" style="color: white;"></i></span>
                </div>
            </div>
        </form>

        </div>
        <!-- End Top Search -->

        <div  class="container">
            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li style="margin-top: 10px;" class="search"><a href="#"><i class="fa fa-search" style="color: white; font-size: 17px;"></i></a></li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button style="font-size: 19px; padding-top: 5px;" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                <a class="navbar-brand" href="{{ route('home') }}">

                    {{-- <img style="margin-top: -20px;" src="images/logo2.png" class="logo logo-display" alt="">
                    <img style="margin-top: -10px;" src="images/logo2.png" class="logo logo-scrolled" alt=""> --}}

     @yield('logo')


                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul style="margin-top: 10px;" class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li><a href="{{ route('home') }}" onMouseOver="this.style.color='orange'" onMouseOut="this.style.color='white'">{{trans('main.home')}}</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" onMouseOver="this.style.color='orange'" onMouseOut="this.style.color='white'" data-toggle="dropdown">{{trans('main.sp')}}</a>
                        <ul class="dropdown-menu cart-list">
                            <li>
                                <h6><a style="color: #fff;" href="{{ route('math') }}" onMouseOver="this.style.color='orange'" onMouseOut="this.style.color='white'">{{trans('main.ms')}}</a></h6>
                            </li>
                            <li>
                                <h6><a style="color: #fff;" href="{{ route('nat') }}" onMouseOver="this.style.color='orange'" onMouseOut="this.style.color='white'">{{trans('main.ns')}}</a></h6>
                            </li>
                            <li>
                                <h6><a style="color: #fff;" href="{{ route('life') }}" onMouseOver="this.style.color='orange'" onMouseOut="this.style.color='white'">{{trans('main.ls')}}</a></h6>
                            </li>
                            <li>
                                <h6><a style="color: #fff;" href="{{ route('earth') }}" onMouseOver="this.style.color='orange'" onMouseOut="this.style.color='white'">{{trans('main.es')}}</a></h6>
                            </li>
                        </ul>
                    </li>
                  @auth
                    <li><a href="{{ route('add') }}" onMouseOver="this.style.color='orange'" onMouseOut="this.style.color='white'">{{trans('main.adds')}}</a></li>
                  @endauth
                    <li><a href="http://localhost/library2/public/#team" onMouseOver="this.style.color='orange'" onMouseOut="this.style.color='white'">{{trans('main.about')}}</a></li>
                    <li><a href="{{ route('contact') }}" onMouseOver="this.style.color='orange'" onMouseOut="this.style.color='white'">{{trans('main.contact')}}</a></li>

          @guest
          <li class="nav-item">
              <a class="nav-link" onMouseOver="this.style.color='orange'" onMouseOut="this.style.color='white'" href="{{ route('login') }}">{{trans('main.main_login')}}</a>
          </li>
          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" onMouseOver="this.style.color='orange'" onMouseOut="this.style.color='white'" href="{{ route('register') }}">{{trans('main.main_reg')}}</a>
              </li>
          @endif
      @else
          <li class="nav-item dropdown">
              <a class="nav-link " href="#" onMouseOver="this.style.color='orange'" onMouseOut="this.style.color='white'" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="position: relative; padding-left: 50px;" v-pre>
               <img class="im" src="{{ asset(Storage::url(Auth::user()->avatar)) }}" style="width: 32px; height: 32px; position: absolute; top:23px; left:10px; border-radius: 50%;">
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>
           {{-- dropdown-menu-left --}}
            <div class="dropdown-menu cart-list " style="background: #380363d3; border: solid 1px orange;">
              <ul >
                 <li style="padding: 5px 0px; font-size: 14px; padding-left: 10px;" class="dropdown-item"><a href="{{ route('profile') }}" style="color: white;" onMouseOver="this.style.color='orange'" onMouseOut="this.style.color='white'">Profile</a></li>
                
                  <li style="padding: 5px 0px; font-size: 14px; padding-left: 10px;" class="dropdown-item"><a href="{{ route('change-password') }}" style="color: white;" onMouseOver="this.style.color='orange'" onMouseOut="this.style.color='white'">Change Password</a></li>

                  @if (Auth::user()->admin == 1)
                        <li style="padding: 5px 0px; font-size: 14px; padding-left: 10px;" class="dropdown-item"><a href="{{ route('Additions') }}" style="color: white;" onMouseOver="this.style.color='orange'" onMouseOut="this.style.color='white'">Additions</a></li>
                        <li style="padding: 5px 0px; font-size: 14px; padding-left: 10px;" class="dropdown-item"><a href="{{ route('users') }}" style="color: white;" onMouseOver="this.style.color='orange'" onMouseOut="this.style.color='white'">Users</a></li>
                  @endif

                 <li style="padding: 5px 0px;"> <a class="dropdown-item" style="font-size: 14px; color: white;  padding-left: 10px;" class="fa fa-sign-out" href="{{ route('logout') }}"
                     onclick="event.preventDefault(); 
                                   document.getElementById('logout-form').submit();" onMouseOver="this.style.color='orange'" onMouseOut="this.style.color='white'">
                      {{trans('main.main_logout')}}
                  </a></li>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>    
              </ul>  
           </div>
           </li>
      @endguest 

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>


    </nav>


    @yield('content')





    <!-- Bottom widget -->
    <section id="bottom-widget" class="home-section bg-white">
        <div class="container">
            <div style="padding-bottom: 30px;" class="row">
                <div class="col-md-4">
                    <div class="contact-widget wow bounceInLeft">
                        <i style="color: rgb(230, 156, 20); padding-bottom: 20px;" class="fa fa-map-marker fa-4x"></i>
                        <h5>Location</h5>
                        <p style="color: black;">
                            Libya,Tripoli<br />University Of Tripoli<br />Computer Science
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-widget wow bounceInUp">
                        <i style="color: rgb(230, 156, 20); padding-bottom: 20px;"" class="fa fa-phone fa-4x"></i>
                        <h5>Call</h5>
                        <p style="color: black;">
                            +218927971679<br />+218917971679

                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-widget wow bounceInRight">
                        <i style="color: rgb(230, 156, 20); padding-bottom: 20px;"" class="fa fa-envelope fa-4x"></i>
                        <h5>Email us</h5>
                        <p style="color: black;">
                            hyper20team@gmail.com<br />hyper20team@gmail.com
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mar-top30">
                <div class="col-md-12">
                    <h4>We're on social networks</h4>
                    <ul class="social-network">
                        <li>
                            <a href="https://www.facebook.com/Maleknp97">
                                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/malik_al_nabouli/">
                                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                </span></a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/malik-alnabouli-a0863a1a4/">
                                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                </span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright &copy; Hyper. All rights reserved.</p>
                    <div class="credits">

                        Designed by <a href="{{ route('home') }}">Malik-Alnabouli</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <script src="{{ asset('js/vendor/jquery-1.11.2.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootsnav.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>

    @yield('js')


</body>

</html>