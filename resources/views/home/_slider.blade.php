<section id="feature_news_section" class="feature_news_section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div id="featured-news-carousal" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->

                    <div class="carousel-inner" role="listbox">

                        <!--Recursive slider-->

                        <div class="item active">
                            <img class="img-responsive" src="{{Storage::url($slider1->image)}}" style="height:500px " alt="">
                            <div class="feature_article_inner">
                                <div class="tag_lg red"><a href="">{{$slider1->type}}</a></div>
                                <div class="feature_article_title">
                                    <h1><a href="{{route('haber', ['id' => $slider1->id, 'slug'=> $slider1->slug])}}" target="_self">{{$slider1->title}}</a></h1>
                                </div>
                                <!-- feature_article_title -->

                                <div class="feature_article_date"><a href="#" target="_self">Stive Clark</a>,<a href="#"
                                                                                                                target="_self">Aug
                                        4, 2015</a></div>
                                <!-- feature_article_date -->

                                <div class="feature_article_content">
                                    {!! $slider1->description !!}
                                </div>
                                <!-- feature_article_content -->

                                <!-- article_social -->

                            </div>
                        </div>

                        <div class="item">
                            <img class="img-responsive" src="{{Storage::url($slider2->image)}}"  style="height:500px " alt="Chania">
                            <div class="feature_article_inner">
                                <div class="tag_lg red"><a href="{{asset('assets')}}/category.html">{{$slider2->type}}</a></div>
                                <div class="feature_article_title">
                                    <h1><a href="{{route('haber', ['id' => $slider2->id, 'slug'=> $slider2->slug])}}" target="_self">{{$slider2->title}}</a></h1>
                                </div>
                                <!-- feature_article_title -->

                                <div class="feature_article_date"><a href="#" target="_self">Stive Clark</a>,<a href="#"
                                                                                                                target="_self">Aug
                                        4, 2015</a></div>
                                <!-- feature_article_date -->

                                <div class="feature_article_content">
                                    {!! $slider2->description !!}
                                </div>
                                <!-- feature_article_content -->

                                <!-- article_social -->

                            </div>
                        </div>

                        <!--Recursive slider-->
                        <div class="item">
                            <img class="img-responsive" src="{{Storage::url($slider3->image)}}" style="height:500px " alt="Chania">
                            <div class="feature_article_inner">
                                <div class="tag_lg red"><a href="{{asset('assets')}}/category.html">{{$slider3->type}}</a></div>
                                <div class="feature_article_title">
                                    <h1><a href="{{route('haber', ['id' => $slider3->id, 'slug'=> $slider3->slug])}}" target="_self">{{$slider3->title}} </a></h1>
                                </div>
                                <!-- feature_article_title -->



                                <div class="feature_article_content">
                                    {!! $slider3->description !!}
                                </div>
                                <!-- feature_article_content -->

                            </div>
                        </div>

                        <!--Recursive slider-->
                        <div class="item">
                            <img class="img-responsive" src="{{Storage::url($slider4->image)}}" style="height:500px " alt="Chania">
                            <div class="feature_article_inner">
                                <div class="tag_lg red"><a href="">{{$slider4->type}}</a></div>
                                <div class="feature_article_title">
                                    <h1><a href="{{route('haber', ['id' => $slider4->id, 'slug'=> $slider4->slug])}}" target="_self">{{$slider4->title}}</a></h1>
                                </div>
                                <!-- feature_article_title -->

                                <div class="feature_article_content">
                                    {!! $slider4->description !!}
                                </div>
                                <!-- feature_article_content -->

                            </div>
                        </div>

                        <!--Recursive slider end-->

                        <!-- Left and right controls -->
                        <div class="control-wrapper">
                            <a class="left carousel-control" href="#featured-news-carousal" role="button" data-slide="prev">
                                <i class="fa fa-chevron-left" aria-hidden="true"></i> </a>
                            <a class="right carousel-control" href="#featured-news-carousal" role="button"
                               data-slide="next"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
                        </div>

                    </div>
                    <!--carousel-inner-->

                </div>
            </div>
            <!-- col-md-7 -->


            <div class="col-md-4">
                <div class="feature_static_wrapper">
                    <!-- clock widget start -->
                    <script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href","//s.bookcdn.com//css/cl/bw-cl-180x170r9.css"); document.getElementsByTagName("head")[0].appendChild(css_file); </script> <div id="tw_19_1592514652"><div style="width:120px; height:140px; margin: 0 auto;"><a href="https://bookeder.com/time/karabuk-39097">Karabük</a><br/></div></div> <script type="text/javascript"> function setWidgetData_1592514652(data){ if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = ''; var params = data.results[i]; objMainBlock = document.getElementById('tw_'+params.widget_type+'_'+params.widget_id); if(objMainBlock !== null) objMainBlock.innerHTML = params.html_code; } } } var clock_timer_1592514652 = -1; </script> <script type="text/javascript" charset="UTF-8" src="https://widgets.booked.net/time/info?ver=2&domid=765&type=19&id=1592514652&scode=124&city_id=39097&wlangid=21&mode=2&details=0&background=ffffff&color=363636&add_background=ffffff&add_color=333333&head_color=ffffff&border=0&transparent=0"></script>
                    <!-- clock widget end -->
                </div>
                <!-- feature_static_wrapper -->

            </div>
            <!-- col-md-5 -->

            <div class="col-md-4">
                <div class="feature_static_last_wrapper">

                    <!-- feature_article_img -->
                    <!-- weather widget start --><div id="m-booked-bl-simple-week-vertical-73808">
                        <div class="booked-wzs-160-275 weather-customize" style="background-color:#137AE9; width:160px;" id="width1 " >
                            <a target="_blank" class="booked-wzs-top-160-275" href="https://www.booked.net/"><img src="//s.bookcdn.com/images/letter/s5.gif" alt="Booked" /></a> <div class="booked-wzs-160-275_in"> <div class="booked-wzs-160-275-data"> <div class="booked-wzs-160-275-left-img wrz-18"></div> <div class="booked-wzs-160-275-right">
                                        <div class="booked-wzs-day-deck"> <div class="booked-wzs-day-val"> <div class="booked-wzs-day-number"><span class="plus">+</span>12</div> <div class="booked-wzs-day-dergee"> <div class="booked-wzs-day-dergee-val">&deg;</div> <div class="booked-wzs-day-dergee-name">C</div>
                                                </div>
                                            </div>
                                            <div class="booked-wzs-day"> <div class="booked-wzs-day-d">
                                                    <span class="plus">+</span>15&deg;</div>
                                                <div class="booked-wzs-day-n"><span class="plus">+</span>9&deg;</div> </div>
                                        </div> <div class="booked-wzs-160-275-info"> <div class="booked-wzs-160-275-city">Karabük</div>
                                            <div class="booked-wzs-160-275-date">Çarşamba, 10</div> </div>
                                    </div>
                                </div>
                                <a target="_blank" href="https://bookeder.com/weather/karabuk-39097" class="booked-wzs-bottom-160-275" >
                                    <table cellpadding="0" cellspacing="0" class="booked-wzs-table-160"> <tr> <td class="week-day"> <span class="week-day-txt">Perşembe</span></td> <td class="week-day-ico">
                                                <div class="wrz-sml wrzs-01"></div></td> <td class="week-day-val"><span class="plus">+</span>19&deg;</td> <td class="week-day-val"><span class="plus">+</span>7&deg;</td> </tr> <tr> <td class="week-day"> <span class="week-day-txt">Cuma</span></td> <td class="week-day-ico"><div class="wrz-sml wrzs-29"></div></td> <td class="week-day-val"><span class="plus">+</span>11&deg;</td> <td class="week-day-val">0&deg;</td> </tr> <tr> <td class="week-day"> <span class="week-day-txt">Cumartesi</span></td> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> <td class="week-day-val"><span class="plus">+</span>4&deg;</td> <td class="week-day-val">-2&deg;</td> </tr> <tr> <td class="week-day"> <span class="week-day-txt">Pazar</span></td> <td class="week-day-ico"><div class="wrz-sml wrzs-29"></div></td> <td class="week-day-val"><span class="plus">+</span>4&deg;</td> <td class="week-day-val">0&deg;</td> </tr> <tr> <td class="week-day"> <span class="week-day-txt">Pazartesi</span></td> <td class="week-day-ico"><div class="wrz-sml wrzs-22"></div></td> <td class="week-day-val"><span class="plus">+</span>3&deg;</td> <td class="week-day-val">-2&deg;</td> </tr> <tr> <td class="week-day"> <span class="week-day-txt">Salı</span></td> <td class="week-day-ico"><div class="wrz-sml wrzs-22"></div></td> <td class="week-day-val">-1&deg;</td> <td class="week-day-val">-5&deg;</td> </tr> </table> <div class="booked-wzs-center"> <span class="booked-wzs-bottom-l">7 Günlük Hava Tahmini</span> </div> </a> </div> </div><script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-160x275.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-bl-simple-week-vertical-73808'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } </script>
                        <script type="text/javascript" charset="UTF-8" src="https://widgets.booked.net/weather/info?action=get_weather_info&ver=6&cityID=39097&type=4&scode=124&ltid=3457&domid=765&anc_id=95195&cmetric=1&wlangID=21&color=137AE9&wwidth=160&header_color=ffffff&text_color=333333&link_color=08488D&border_form=1&footer_color=ffffff&footer_text_color=333333&transparent=0"></script><!-- weather widget end -->

                </div>
                <!-- feature_static_wrapper -->

            </div>
            <!-- col-md-5 -->

        </div>
        <!-- Row -->

    </div>
    <!-- container -->

</section>
<!-- Feature News Section -->
