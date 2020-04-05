@extends('layouts.main')

@section('title')
    <title>{{$name->name_en}}</title>
@endsection

@section('css')
    <style>
          .feature-destination .img-bg:before,
.slider-wrap .img-bg:before {

    border-radius: 15px;
    background: #000;
}
    </style>
@endsection

@section('logo')
                    <img style="margin-top: -20px;" src="{{ asset('images/logo2.png') }}" class="logo logo-display" alt="">
                    <img style="margin-top: -10px;" src="{{ asset('images/logo2.png') }}" class="logo logo-scrolled" alt="">
@endsection

@section('content')

 <section id="hello" class="contact-banner bg-mega" style="background: url({{ asset(Storage::url($name->img)) }})no-repeat;">
        <div class="overlay"></div>
            <div class="container">
                <div class="row">
                     <div class="main_home text-center">
                        <div class="contact_text" style="margin-bottom: -200px; margin-top: -50px;">
                              <h1 class="text-white text-uppercase">{{$name->name_en}}</h1>
                       </div>
                </div>
             </div><!--End off row-->
       </div><!--End off container -->
</section> <!--End off Home Sections-->

 <section class="feature-destination">
        <div class="container">
            <div class="row" style="margin-top: -130px;">
               <h4 class="text-black text-uppercase text-center" style="padding-bottom: 60px;">Meterials</h4>

                @foreach ($materials as $material)
                   @if($material->id_section == $id){
                       @if($material->choice == 1){
                      <div class="col-sm-6 col-md-6 col-lg-3 element-animate ">
                        <a href="{{ route('mada',['id'=>$material->id]) }}" class="img-bg" style="border-radius: 15px; background-color: rgb(230, 156, 20); height: 90px;">
                           <div class="text">
                               <span class="icon ion-ios-location"></span>
                               <h2 style="padding-top: 20px;">{{$material->course_code}}</h2>
                                <p style="color: #fff;">{{$material->name_en}}</p>
                           </div>
                       </a>
                     </div>
                       }@else{
                      <div class="col-sm-6 col-md-6 col-lg-3 element-animate ">
                        <a href="{{ route('mada',['id'=>$material->id]) }}" class="img-bg" style="border-radius: 15px; background-color: #380363; height: 90px;">
                           <div class="text">
                               <span class="icon ion-ios-location"></span>
                               <h2 style="padding-top: 20px;">{{$material->course_code}}</h2>
                                <p style="color: #fff;">{{$material->name_en}}</p>
                           </div>
                       </a>
                     </div>
                       }@endif
                    }@endif
                @endforeach


            </div>
        </div>
    </section>

<br>
<br>
<br>
<br>


@endsection