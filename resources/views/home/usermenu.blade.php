


@auth
<aside class="col-right sidebar col-sm-2 animated" style="visibility: visible;">
    <div class="block block-account">
        <div class="block-title"> <h2>User Panel</h2> </div>
        <div class="block-content">
            <ul>
                <li><a href="{{route('myprofile')}}"><span> My Profile</span></a></li>
                <li><a href="{{route('user_haber')}}">My News</a></li>
                <li><a href="{{route('myreviews')}}"><span>Reviews</span></a></li>
                <li><a href="{{route('logout')}}"><span> Log out</span></a></li>

                @php
                    $userRoles = Auth::user()->roles->pluck('name');
                @endphp

                @if($userRoles->contains('admin'))

                    <li><a href="{{route('admin_home')}}"><span>Admin Panel</span></a></li>

                @endif

            </ul>
            <!-- jquery Core-->

        </div>
        <!--block-content-->
    </div>
</aside>
    @endauth

