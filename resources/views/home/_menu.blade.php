@php
    $parentCategories =\App\Http\Controllers\HomeController::categorylist()
@endphp

<div class="navigation-section">
    <nav class="navbar m-menu navbar-default">
        <div class="container">

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="#navbar-collapse-1">
                <ul class="nav navbar-nav main-nav">
                    <li><a href="{{route('home')}}">News</a></li>
                    <li><a href="{{route('references')}}">References</a></li>
                    <li><a href="{{route('aboutus')}}">About Us</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                    <li><a href="{{route('faq')}}">FAQ</a></li>

                    <li class="dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Categories
                            <span><i class="fa fa-angle-down"></i></span></a>

                        <ul class="dropdown-menu">
                         @foreach($parentCategories as $rs)
                            <li>
                                <div class="m-menu">
                                    <ul class="row">
                                        <li class="dropdown-header" ><a href="#"> <b>{{$rs->title}}</b></a> </li>
                                        <li>
                                        @if(count($rs->children))
                                          @include('home.categorytree',['children'=>$rs->children])
                                        @endif
                                        </li>
                                    </ul>
                                </div>
                            </li>
                         @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
            <!-- .navbar-collapse -->

        <!-- .container -->
    </nav><!-- .nav -->
</div>
