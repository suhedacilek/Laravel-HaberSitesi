@extends('layouts.home')

@section('title', 'Frequently Asked Question')

@section('headerjs')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#accordion" ).accordion();
        } );
    </script>

@section('content')

    <section class="breadcrumb_section">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active"><a href="#">Frequently Asked Questions</a></li>
                </ol>
            </div>
        </div>
    </section>

    <div class="section">
        <div class="container">
            <div class="row">

                <div class="col-md-6">

                @foreach($datalist as $rs)

                    <h1>{{$rs->question}}</h1>
                    <div>
                    <p>{!! $rs->answer !!}</p>
                    </div>
                @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

