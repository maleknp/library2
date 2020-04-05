@extends('layouts.main')

@section('title')
    <title>All Users</title>
@endsection

@section('css')

    {{-- #380363d3 --}}
    {{-- rgb(230, 156, 20) --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">


@endsection
@section('logo')
                    <img style="margin-top: -20px;" src="{{ asset('images/logo2.png') }}" class="logo logo-display" alt="">
                    <img style="margin-top: -10px;" src="{{ asset('images/logo2.png') }}" class="logo logo-scrolled" alt="">
@endsection

@section('content')



    <div class="limiter">
        <div class="container-table100">
            <div class="wrap-table100">
                <div class="table">
                <div class="row">
                   <h2 style="text-align: center; color: black;">All Users</h2>
                </div>
                    <div class="row header">
                        <div class="cell">
                            Full Name
                        </div>
                        <div class="cell">
                            R-Number
                        </div>
                        <div class="cell">
                            E-mail
                        </div>
                        <div class="cell">
                            Delete
                        </div>
                    </div>



                @foreach ($user as $user)
                    @if($user->admin < 1)
                    <div style="background: #fff;" onMouseOver="this.style.background='#dad6d6'" onMouseOut="this.style.background='white'" class="row" id="back">
                        <div class="cell" data-title="Full Name">
                            {{$user->name}}
                        </div>
                        <div class="cell" data-title="Registration Number">
                            {{$user->number}}
                        </div>
                        <div class="cell" data-title="E-mail">
                            {{$user->email}}
                        </div>
                        <div class="cell" data-title="Delete">
                                <form action="{{ route('delete-user',['id'=>$user->id]) }}" method="post" style="display: inline; ">
                                <input type="submit" value="Delete" class="btn btn-danger">
                                  @csrf
                                  @method('DELETE')
                                </form>
                        </div>
                    </div>
                    @endif
                @endforeach
                </div>
            </div>
        </div>
    </div>



@endsection

@section('js')



@endsection
