@extends('layouts.home')

@section('title', $data->title."News List")
@section('description'){{$data->description}}@endsection
@section('keywords', $data->keywords)

@section('content')


        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data,$data->title)}}</li>
                </ol>
            </div>
        </div>


    <div class="section">
        <div class="container">


                    <br>

                <div class="category_article_wrapper">
                    <div class="row">

                        @foreach($datalist as $data)
                        <div class="col-md-4">
                            <div class="category_article_body">
                                <div class="top_article_img">
                                    <a href="{{route('haber',['id'=> $data->id, 'slug'=> $data->slug])}}" target="_self"><img class="img-responsive" src="{{Storage::url($data->image)}}" width="400"
                                                                         style="height: 200px"   alt="feature-top">
                                    </a>
                                </div>
                                <!-- top_article_img -->

                                <span class="tag pink">{{$data->type}}</span>

                                <div class="category_article_title">
                                    <h2>{{$data->title}}</h2>

                                </div>

                            </div>
                            <!-- category_article_body -->
                        </div>
                        <!-- col-md-6 -->

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

