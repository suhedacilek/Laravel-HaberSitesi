
<section id="category_section" class="category_section">

    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <div class="category_section tablet">

                    <div class="article_title header_purple">
                        <h2><a href="" target="_self">News</a></h2>

                    </div>
                    <!----article_title------>
<br>
                    <div class="category_article_wrapper">
                        <div class="row">

                            @foreach($news as $rs)
                            <div class="col-md-6">
                                <div class="category_article_body">
                                    <div class="top_article_img">
                                        <a href="" target="_self"><img class="img-responsive" src="{{Storage::url($rs->image)}}"
                                                                               style="height: 200px"   alt="feature-top">
                                        </a>
                                    </div>
                                    <!-- top_article_img -->

                                    <span class="tag pink"><a href="" target="_self">{{$rs->type}} </a></span>

                                    <div class="category_article_title">
                                        <h2><a href="{{route('haber',['id'=> $rs->id, 'slug'=> $rs->slug])}}" target="_self">{{$rs->title}} </a></h2>
                                    </div>
                                    <!-- category_article_title -->


                                    <div class="category_article_content">
                                        {{$rs->description}}

                                    </div>
        <br>
                                    <br>
                                    <!-- category_article_content -->
                                    <!-- media_social -->

                                </div>
                                <!-- category_article_body -->

                            </div>
                            <!-- col-md-6 -->
                            @endforeach
                        </div>
                        <!-- row -->
                    </div>
                    <!-- category_article_wrapper -->
                </div>
                <!-- Tablet News Section -->
            </div>
            <!-- Left Section -->

            <!--SağTaraf -->
            <div class="col-md-4">

                <div class="widget">
                    <div class="widget_title widget_black">
                        <h2><a href="#">Popular News</a></h2>
                    </div>

                   @foreach($popular as $rs)
                    <div class="media">
                        <div class="media-left">
                            <a href="#"><img class="media-object" src="{{Storage::url($rs->image)}}" height="122" width="122" alt="Generic placeholder image"></a>
                        </div>

                        <div class="media-body">
                            <h3>
                                <a href="{{route('haber',['id'=> $rs->id, 'slug'=> $rs->slug])}}" target="_self">{{$rs->title}}</a>
                            </h3>

                        </div>
                    </div>
                    @endforeach
                    <p class="widget_divider"><a href="#" target="_self">More News&nbsp;&raquo;</a></p>
                </div>
                <!-- Popular News -->




                <div class="widget m30">
                    <div class="widget_title widget_black">
                        <h2><a href="#">Last News</a></h2>
                    </div>
                    @foreach($last as $rs)
                    <div class="media">
                        <div class="media-left">
                            <a href="#"><img class="media-object" src="{{Storage::url($rs->image)}}" height="122" width="122" alt="Generic placeholder image"></a>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">
                                <a href="{{route('haber',['id'=> $rs->id, 'slug'=> $rs->slug])}}" target="_self">{{$rs->title}}</a>
                            </h3>
                        </div>
                    </div>
                    @endforeach
                    <p class="widget_divider"><a href="#" target="_self">More News&nbsp;&nbsp;&raquo; </a></p>
                </div>
             </div>
            <!--Sağ Taraf Sonu -->

        <!-- Row -->
        </div>

    <!-- Container -->
    </div>

</section>
<!-- Category News Section -->
