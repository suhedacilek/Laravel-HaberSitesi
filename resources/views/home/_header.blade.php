@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp

<section id="header_section_wrapper" class="header_section_wrapper">
    <div class="container">
        <div class="header-section">
            <div class="row">
                <div class="col-md-4">
                    <div class="left_section">
                        <p><b><span id="datetime"></span</b> ></p>

                        <script>
                            var dt = new Date();
                            document.getElementById("datetime").innerHTML = (("0"+dt.getDate()).slice(-2)) +"."+ (("0"+(dt.getMonth()+1)).slice(-2)) +"."+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
                        </script>
                        <!-- Time -->
                        <div class="social">
                            @if($setting->facebook != null)<a class="icons-sm fb-ic" href="{{$setting->facebook}}"><i class="fa fa-facebook"></i></a>@endif

                            @if($setting->twitter != null)<a class="icons-sm tw-ic" href="{{$setting->twitter}}"><i class="fa fa-twitter"></i></a>@endif

                            @if($setting->instagram != null)<a class="icons-sm inst-ic" href="{{$setting->instagram}}"><i class="fa fa-instagram"> </i></a>@endif

                        </div>
                        <!-- Top Social Section -->
                    </div>
                    <!-- Left Header Section -->
                </div>
                <div class="col-md-4">
                    <div class="logo">
                        <a href="{{route('home')}}"><img src="{{asset('assets')}}/img/suhecodelogo.png" height="150" alt="Tech NewsLogo"></a>
                    </div>
                    <!-- Logo Section -->
                </div>


                <div class="col-md-4">
                    <div class="right_section">
                        <ul class="nav navbar-dark">
                            <li class="dropdown menu">
                                @auth
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class ="fa fa-user"> </i><strong><h3>{{Auth::user()->name}}</h3></strong><i
                                        class="fa fa-angle-down"></i></button>
                                @endauth

                            @guest
                                <li><a href="/login">Login/</a></li>
                                <li><a href="/register">Register</a></li>
                            @endguest

                            @auth
                                <ul class="dropdown-menu" >
                                    @php
                                        $userRoles = Auth::user()->roles->pluck('name');
                                    @endphp

                                    @if($userRoles->contains('admin'))

                                        <li><a href="{{route('admin_home')}}"><i class="fa fa-user">Admin Panel</i></a></li>

                                    @endif

                                    <li><a href="{{route('myprofile')}}">>My Account</a></li>
                                    <li><a href="{{route('myreviews')}}">>My Reviews</a></li>
                                    <li><a href="{{route('logout')}}">>Logout</a></li>

                                </ul>
                                @endauth
                            </li>
                        </ul>


                        <ul class="nav-cta hidden-xs">

                                    <li>
                                        <div class="head-search">
                                            <form action="{{route('gethaber')}}" method="post">
                                                @csrf
                                                <!-- Input Group -->
                                                    @livewire('search')
                                                        <button type="submit" ><i class="fa fa-search"></i>Search</button>
                                            </form>
                                            @section('footerjs')
                                            @livewireScripts
                                            @endsection
                                        </div>
                                   </li>

                        </ul>


                        <!-- Search Section -->
                    </div>
                    <!-- Right Header Section -->
                </div>
            </div>
        </div>
        <!-- Header Section -->
@include('home._menu')

    </div>
    <!-- .container -->
</section>
<!-- header_section_wrapper -->
