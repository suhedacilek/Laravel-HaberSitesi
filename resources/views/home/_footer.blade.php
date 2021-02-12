@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp


<section id="footer_section" class="footer_section">
    <div class="container">
        <hr class="footer-top">
        <div class="row">
            <div class="col-md-4">
                <br>
                <div class="footer_widget_title"><h3>About Tech</h3></div>

                <div class="logo footer-logo">
                    <a title="fontanero" href="{{route('home')}}">
                        <img src="{{asset('assets')}}/img/tech_about.jpg" height="134" width="235" alt="technews">
                    </a>


                </div>
            </div>
            <div class="col-md-4">
                <br>
                <div class="footer_widget_title">
                    <h3><a href="" target="_self">Contact</a></h3>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="list-unstyled left">

                            <strong>Company :</strong> {{$setting->company}} <br>
                            <strong>Address :</strong> {{$setting->address}} <br>
                            <strong>Phone :</strong> {{$setting->phone}} <br>
                            <strong>Fax :</strong> {{$setting->fax}} <br>
                            <strong>Email :</strong> {{$setting->email}} <br>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <br>
                <div class="footer_widget_title">
                    <h3><a href="" target="_self">Tech Photos</a></h3>
                </div>
                <div class="widget_photos">
                    <img class="img-thumbnail" src="{{asset('assets')}}/img/tech_photo1.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('assets')}}/img/tech_photo2.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('assets')}}/img/tech_photo3.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('assets')}}/img/tech_photo4.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('assets')}}/img/tech_photo5.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('assets')}}/img/tech_photo6.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('assets')}}/img/tech_photo7.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('assets')}}/img/tech_photo8.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('assets')}}/img/tech_photo9.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('assets')}}/img/tech_photo10.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('assets')}}/img/tech_photo11.jpg" alt="Tech Photos">
                    <img class="img-thumbnail" src="{{asset('assets')}}/img/tech_photo12.jpg" alt="Tech Photos">
                </div>

            </div>
        </div>
    </div>

    <div class="footer_bottom_Section">
        <div class="container">
            <div class="row">
                <div class="footer">
                    <div class="col-sm-3">
                        <div class="social">

                            @if($setting->facebook != null)<a class="icons-sm fb-ic" href="{{$setting->facebook}}"><i class="fa fa-facebook"></i></a>@endif

                            @if($setting->twitter != null)<a class="icons-sm tw-ic" href="{{$setting->twitter}}"><i class="fa fa-twitter"></i></a>@endif

                            @if($setting->instagram != null)<a class="icons-sm inst-ic" href="{{$setting->instagram}}"><i class="fa fa-instagram"> </i></a>@endif


                        </div>
                    </div>
                    <div class="col-sm-6">
                        <p>&copy; Copyright 2021 News Suhecode . Design by: <a href="https://github.com/suhedacilek/">Suhecode</a> </p>
                    </div>
                    <div class="col-sm-3">
                        <p>Technology News</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

