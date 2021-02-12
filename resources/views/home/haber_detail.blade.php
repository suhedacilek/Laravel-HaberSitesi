@extends('layouts.home')

@section('title', $data->title."News List")
@section('description'){{$data->description}}@endsection
@section('keywords', $data->keywords)

@section('content')

    <section class="breadcrumb_section">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data,$data->category->title)}}</li>
                    <li class="active">{{$data->title}}</li>
                </ol>
            </div>
        </div>
    </section>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">


                    <div class="entity_wrapper">
                        <div class="entity_title">
                            <h1><a href="{{route('haber',['id'=> $data->id, 'slug'=> $data->slug])}}">{{$data->title}}</a></h1>
                        </div>


                        <div class="entity_thumb">
                            <img class="img-responsive" src="{{Storage::url($data->image)}}" height="400" width="800" align="center" alt="feature-top">
                            <br>
                            @foreach($datalist as $rs)
                            <img  src="{{Storage::url($rs->image)}}" height="90" width="200"  alt="feature-top">
                            @endforeach
                        </div>
                        <!-- entity_thumb -->

                        <div class="entity_content">
                            <p>

                            {!! $data->detail !!}
                            </p>

                        </div>
                        <!-- entity_content -->


                        </div>
                        <!-- entity_footer -->

                    </div>
                    <!-- entity_wrapper -->

                <!--Readers Comment-->
                <div class="entity_comments">
                    <div class="entity_inner__title header_black">
                        <h2>Write Your Review</h2>
                    </div>
                    <!--Entity Title -->

                    <div class="entity_comment_from">
                        @livewire('review',['id'=>$data->id])
                    </div>
                    <!--Entity Comments From -->
                </div>

                <div class="readers_comment">
                    <div class="entity_inner__title header_purple">
                        <h2>Readers Comment</h2>
                    </div>

                    @foreach($reviews as $rs)
                        <div class="media">

                            <div class="media-body">
                                <h3><i class="fa fa-user-o"></i>User: {{$rs->user->name}}</h3>
                                <h6>Subject: {{$rs->subject}}</h6>
                                <i class="fa fa-clock-o">{{$rs->created_at}}</i>
                                <p>{{$rs->review}}</p>

                                <i class="fa fa-star"></i>
                                <i class="@if($rs->rate<1) fa fa-star  @endif"></i>
                                <i class="@if($rs->rate<2) fa fa-star @endif"></i>
                                <i class="@if($rs->rate<3) fa fa-star  @endif"></i>
                                <i class="@if($rs->rate<4) fa fa-star  @endif"></i>
                                <i class="@if($rs->rate<5) fa fa-star  @endif"></i>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!--Entity Comments -->
            </div>

        </div>
    </div>

@endsection

