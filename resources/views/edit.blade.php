@extends('layouts.main')

@section('title')
    <title>Edit</title>
@endsection

@section('css')
	<link rel="icon" type="image/png" href="login2/images/icons/plus2.png"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('add1/css/main.css') }}">

@endsection

@section('logo')
                    <img style="margin-top: -20px;" src="{{ asset('images/logo2.png') }}" class="logo logo-display" alt="">
                    <img style="margin-top: -10px;" src="{{ asset('images/logo2.png') }}" class="logo logo-scrolled" alt="">
@endsection

@section('content')

    <div class="bg-contact100" style="background-image: url({{ asset('images/222.jpg') }});">
        <div class="container-contact100">
            <div class="wrap-contact100">
                <div class="contact100-pic js-tilt" data-tilt>

                 @if($alls->type == 'Test')
                     <img src="{{ asset(Storage::url($alls->img)) }}" alt="" width="600" height="300">
                   @else
                     <img src="{{ asset('images/book5.png') }}" alt="IMG">
                   @endif
                </div>

                <form action="  {{ url('update/'. $alls->id) }} " method="post" enctype="multipart/form-data" class="contact100-form validate-form">
                 @method('PATCH')
                 @csrf
                    <span class="contact100-form-title">
						Edit
					</span>

                    <div class="wrap-input100 validate-input" data-validate="Extension Type is required">
                        <select style="padding: 13px; padding-left: 40px; border-radius: 20px 20px 20px 20px;" class="input100" name="type">
                          @foreach ($type as $type)
                                 <option {{ $type->name == $alls->type ? 'selected' : ''}} value="{{ $type->name }}"> {{ $type->name }} </option>
                               
                           @endforeach
                        </select>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i style="margin-left: -5px;" class="fa fa-paperclip" aria-hidden="true"></i>
						</span>
                    </div>

@if(Session::has('message'))
<p style="height: 50px; color: red; background: pink; margin-bottom: 7px; margin-top: -1px; border-radius: 25px; text-align: center;" class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif

                    <div class="wrap-input100 validate-input" data-validate="Course Code is required">
                        <input class="input100" type="text" name="code" placeholder="Course Code Ex:- CS111" value="{{ $alls->code }}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-book" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Course Code is required">
                        <input class="input100" type="text" name="name" placeholder="Name of Sheet,Book or Test" value="{{ $alls->name }}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-newspaper" aria-hidden="true"></i>
						</span>
                    </div>


                    <div class="wrap-input100 ">
                        <input class="input100" type="file" name="img" placeholder="File or image">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-upload" aria-hidden="true"></i>
						</span>
                    </div>


                    <div class="container-contact100-form-btn">
                        <button class="contact100-form-btn">
							Edit
						</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

 {{-- <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script> --}}

@section('js')
    <script src="{{ asset('add1/js/tilt.jquery.min.js') }}"></script>
    <script src="{{ asset('add1/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('add1/js/main.js') }}"></script>
@endsection