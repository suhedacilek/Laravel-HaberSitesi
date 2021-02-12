@extends('layouts.home')

@section('title', 'About Us - '.$setting->title)
@section('description'){{$setting->description}}@endsection
@section('keywords', $setting->keywords)
@section('content')
    <section class="breadcrumb_section">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active"><a href="#">About Us</a></li>
                </ol>
            </div>
        </div>
    </section>

    <div class="section">
        <div class="container">
            <div class="row">
               {!! $setting->aboutus !!}
            </div>

        </div>
    </div>

@endsection

