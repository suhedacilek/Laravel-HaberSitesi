<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{route('admin_home')}}"><img src="{{asset('assets')}}/admin/images/logo.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="{{asset('assets')}}/admin/images/logo2.png" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">

                <li>
                    <a href="{{route('admin_category')}}"><i class="menu-icon fa fa-folder"></i>Category</a>
                </li>


                <li>
                    <a href="{{route('admin_haber')}}"><i class="menu-icon fa fa-book"></i>Haber</a>
                </li>

                <li>
                    <a href="{{route('admin_message')}}"><i class="menu-icon fa  fa-pencil"></i>Contact Message</a>
                </li>

                <li>
                    <a href="{{route('admin_review')}}"><i class="menu-icon fa  fa-comment"></i>Reviews</a>
                </li>
                <li>
                    <a href="{{route('admin_faq')}}"><i class="menu-icon fa  fa-question"></i>FAQ</a>
                </li>

                <li>
                    <a href="{{route('admin_users')}}"><i class="menu-icon fa  fa-user"></i>Users</a>
                </li>


                <li>
                    <a href="{{route('admin_setting')}}"><i class="menu-icon fa  fa-cog"></i>Settings</a>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->


