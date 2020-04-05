@extends('layouts.main')

@section('title')
    <title>All Additions</title>
@endsection

@section('css')

    {{-- #380363d3 --}}
    {{-- rgb(230, 156, 20) --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main2.css') }}">


@endsection
@section('logo')
                    <img style="margin-top: -20px;" src="{{ asset('images/logo2.png') }}" class="logo logo-display" alt="">
                    <img style="margin-top: -10px;" src="{{ asset('images/logo2.png') }}" class="logo logo-scrolled" alt="">
@endsection

@section('content')



    <div class="limiter">
        <div class="container-table100">
            <div style="width: 1200px;" class="wrap-table100">
                <div class="table">
                <div class="row">
                   <h2 style="text-align: center;">All Additions</h2>
                </div>
                    <div class="row header">

                        <div class="cell">
                            E-mail
                        </div>

                        <div style="margin-left: -20px;" class="cell">
                            Type
                        </div>
                        <div class="cell">
                            Course
                        </div>

                        <div class="cell">
                            Name
                        </div>

                        <div class="cell">
                            Modify
                        </div>

                    </div>

                @foreach ($all as $all)
                  @if ($all->number == 0)
                    <div style="background: #fff;" onMouseOver="this.style.background='#dad6d6'" onMouseOut="this.style.background='white'" class="row" id="back">

                        <div class="cell" data-title="E-mail">
                            {{$all->email}}
                        </div>

                        <div class="cell" data-title="Type">
                            {{$all->type}}
                        </div>
                        <div class="cell" data-title="Course">
                            {{$all->code}}
                        </div>

                        <div  class="cell" data-title="Name">
                            {{$all->name}}

                        </div>

                        <div class="cell" data-title="Modify">

                                <a id="but" id="download" href="{{ route('download', ['id'=> $all->id]) }}" ><i style="margin-left: -33px; font-size: 25px; margin-top: 5px;" class="fa fa-download dow" aria-hidden="true"></i></a>

                                <form action="{{ route('edit',['id'=>$all->id]) }}" method="get">
                                <input id="but" type="submit" style="margin-top: -25px;" class="btn btn-info" value="Edit" >
                                </form>


                                <form action="{{ route('delete',['id'=>$all->id]) }}" method="post" class="deletee">
                                <input id="delete" style="margin-top: -38px; margin-left: 70px;" type="submit" value="Delete" class="btn btn-danger">
                                  @csrf
                                  @method('DELETE')
                                </form>

                                <form action="{{ route('accept',['id'=>$all->id]) }}" method="post" enctype="multipart/form-data" class="accept">
                                @method('PATCH')
                                @csrf
                                <input id="accept" style="margin-top: -44px; margin-left: 160px;" type="submit" value="Accept" class="btn btn-primary">
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
