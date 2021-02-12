<!-- favicon -->
<link href="{{asset('assets')}}/img/favicon.png" rel=icon>

<!-- web-fonts -->
<link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500' rel='stylesheet' type='text/css'>

<!-- Bootstrap -->
<link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet">

<!-- font-awesome -->
<link href="{{asset('assets')}}/fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
<!-- Mobile Menu Style -->
<link href="{{asset('assets')}}/css/mobile-menu.css" rel="stylesheet">

<!-- Owl carousel -->
<link href="{{asset('assets')}}/css/owl.carousel.css" rel="stylesheet">
<link href="{{asset('assets')}}/css/owl.theme.default.min.css" rel="stylesheet">
<!-- Theme Style -->
<link href="{{asset('assets')}}/css/style.css" rel="stylesheet">
<!-- jquery Core-->
<script src="{{asset('assets')}}/js/jquery-2.1.4.min.js"></script>

<!-- Bootstrap -->
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>

<!-- Theme Menu -->
<script src="{{asset('assets')}}/js/mobile-menu.js"></script>

<!-- Owl carousel -->
<script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>

<!-- Theme Script -->
<script src="{{asset('assets')}}/js/script.js"></script>


<title>{{$data->name}}</title>
<div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header"><h2>User Detail</h2></div>
                      @include('home.message')
                        <div class="card-body card-block">

                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">

                                    <tr>

                                        <th rowspan="8" align="center" valign="center">
                                            @if($data->profile_photo_path)
                                                <img src="{{Storage::url($data->profile_photo_path)}}" height="200" style="border-radius: 10px" alt="">
                                            @endif
                                        </th>
                                        <th>Id</th><td>{{$data ->id}}</td>
                                    </tr>

                                    <tr>
                                        <th>Name</th><td>{{$data ->name}}</td>
                                    </tr>

                                    <tr>
                                        <th>Email</th><td>{{$data -> email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th><td>{{$data -> phone}}</td>
                                    </tr>
                                    <tr>
                                        <th>Address</th><td>{{$data -> address}}</td>
                                    </tr>
                                    <tr>
                                        <th>Date</th><td>{{$data -> cretaed_at}}</td>
                                    </tr>


                                    <tr>
                                        <th>Roles</th>
                                        <td>
                                            <table>
                                                @foreach($data->roles as $row)
                                                    <tr>
                                                        <td>{{$row->name}} <a href="{{ route('admin_user_role_delete', ['userid' => $data->id,'roleid' => $row->id]) }}" onclick="return confirm('Delete. Are you sure?')"><img src="{{asset('assets/admin/images')}}/delete.png" height="25"></a></td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </td>
                                    </tr>


                                    <tr>

                                        <th>Add Role</th>

                                        <td>
                                            <form action="{{route('admin_user_role_add',['id' => $data->id])}}" role="form" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <select name="roleid">
                                                @foreach($datalist as $rs)
                                                        <option value="{{$rs->id}}">{{$rs->name}}</option>
                                                @endforeach
                                                </select>
                                                <br><br>
                                                <button type="submit" class="btn btn-success btn-lg btn-block">Add Role</button>
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

