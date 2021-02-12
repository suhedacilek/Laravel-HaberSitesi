@extends('layouts.home')
@section('title','My Reviews')

@php
    $setting = \App\Http\Controllers\HomeController::getsetting()

@endphp

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

                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>New</th>
                                    <th>Subject</th>
                                    <th>Review</th>
                                    <th>Rate</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th> </th>
                                </tr>
                                </thead>

                                <tbody>
                                @include('home.message')

                                @foreach($datalist as $rs)
                                <tr>

                                    <td>{{$rs ->id}}</td>

                                    <td><a href="{{route('haber',['id'=>$rs->haber->id,'slug'=>$rs->haber->title,'haber_id'=>$rs->haber->id])}}">
                                            {{$rs->haber->title}}</a></td>


                                    <td>{{$rs ->subject}}</td>
                                    <td>{{$rs ->review}}</td>
                                    <td>{{$rs ->rate}}</td>
                                    <td>{{$rs ->status}}</td>
                                    <td>{{$rs ->created_at}}</td>

                                    <td>
                                        <a href="{{route('user_review_delete',['id'=> $rs->id])}}"onclick="return confirm('Delete! Are you sure?')">
                                            <img src="{{asset('assets/admin/images')}}/delete.png" height="25"></a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
              </div>
        </div>
        </div>
    </section>
                <!-- End main -->


@endsection


