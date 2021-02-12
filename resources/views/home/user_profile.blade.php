@extends('layouts.home')

@section('title', 'User Profile')


@section('content')
    <section class="breadcrumb_section">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active"><a href="#">User Profile</a></li>
                </ol>
            </div>
        </div>
    </section>

    <section class="col-2 left-side">
        <div class="main container">
            <div class="row">
            @include('home.usermenu')

            <!-- Main -->
                <div class="col-8 right-side" style="visibility: visible;">
                   @include('profile.show')
                </div>
                <!-- End main -->
            </div>
        </div>
    </section>
@endsection

