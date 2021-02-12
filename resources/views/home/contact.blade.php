@extends('layouts.home')

@section('title', 'Contact - '.$setting->title)
@section('description'){{$setting->description}}@endsection
@section('keywords', $setting->keywords)
@section('content')

    <script src="assets/js/jquery-2.1.4.min.js"></script>

    <section class="breadcrumb_section">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active"><a href="{{route('references')}}">Contact</a></li>
                </ol>
            </div>
        </div>
    </section>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="entity_inner__title header_black">
                    <h2>İletişim Bilgileri</h2>
                    </div>
                    {!! $setting->contact !!}
                </div>
                <div class="col-md-6">
                    <div class="entity_inner__title header_black">
                    <h2>İletişim Formu</h2>
                    </div>
                    @include('home.message')
                        <div class="entity_comment_from">
                            <form action="{{route('sendmessage')}}" method="post" class="clearfix">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Name & Surname">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" placeholder="Phone">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                                </div>
                                <div class="form-group">

                                    <textarea class="form-control" name="message" row="5"  placeholder="Your Message">
                                    </textarea>

                                </div>

                                <button type="submit" class="btn btn-submit red">Send Message</button>
                            </form>
                        </div>
                        <!--Entity Comments From -->

                    </div>
                    <!--Entity Comments -->
                </div>

            </div>

        </div>
    </div>

@endsection

