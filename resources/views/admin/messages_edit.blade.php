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

<div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header"><h2>Message Detail</h2></div>
                      @include('home.message')
                        <div class="card-body card-block">
                            <form action="{{route('admin_message_update', ['id' => $data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">

                                    <tr>
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
                                        <th>Subject</th><td>{{$data -> subject}}</td>
                                    </tr>

                                    <tr>
                                        <th>Message</th>  <td>{{$data -> message}}</td>
                                    </tr>


                                    <tr>
                                        <th>Admin Note</th>
                                        <td>
                                        <textarea id="note" rows="5" cols="75" name="note">{{$data -> note}}</textarea>
                                        </td>
                                    </tr>

                                <tr><td></td><td>
                                        <button type="submit" class="btn btn-success btn-lg btn-block">Edit Message</button>
                                </td></tr>

                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

