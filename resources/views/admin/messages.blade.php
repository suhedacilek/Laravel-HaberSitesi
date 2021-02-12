@extends('layouts.admin')

@section('title', 'Contact Messages List')

@section('description')
    Yazılım Dünyasının en yeni haberleri..
@endsection
@section('keywords','Bilgisayar','Teknoloji', 'Yazılım')

@section('content')

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                    @include('home.message')
            </div>

        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="{{route('admin_home')}}">Home</a></li>
                        <li class="active">Messages</li>
                    </ol>

                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Messages</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Admin Note</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($datalist as $rs)
                                    <tr>
                                        <td>{{$rs ->id}}</td>
                                        <td>{{$rs ->name}}</td>
                                        <td>{{$rs -> email}}</td>
                                        <td>{{$rs -> phone}}</td>
                                        <td>{{$rs -> subject}}</td>
                                        <td>{{$rs -> message}}</td>
                                        <td>{{$rs -> note}}</td>
                                        <td>{{$rs -> status}}</td>



                                        <td><a href="{{route('admin_message_edit',['id'=> $rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=800, height=600')">
                                                <img src="{{asset('assets/admin/images')}}/edit.png" height="25"></a>
                                        </td>

                                        <td><a href="{{route('admin_message_delete', ['id' => $rs-> id])}}" onclick="return confirm('Delete! Are you sure?')">
                                                <img src="{{asset('assets/admin/images')}}/delete.png" height="25"></a></td>
                                    </tr>
                                @endforeach

                                <script src="{{asset('assets')}}/admin/vendors/jquery/dist/jquery.min.js"></script>
                                <script src="{{asset('assets')}}/admin/vendors/popper.js/dist/umd/popper.min.js"></script>
                                <script src="{{asset('assets')}}/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                                <script src="{{asset('assets')}}/admin/js/main.js"></script>
                                <script src="{{asset('assets')}}/admin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
                                <script src="{{asset('assets')}}/admin/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
                                <script src="{{asset('assets')}}/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
                                <script src="{{asset('assets')}}/admin/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
                                <script src="{{asset('assets')}}/admin/vendors/jszip/dist/jszip.min.js"></script>
                                <script src="{{asset('assets')}}/admin/vendors/pdfmake/build/pdfmake.min.js"></script>

                                <script src="{{asset('assets')}}/admin/vendors/pdfmake/build/vfs_fonts.js"></script>
                                <script src="{{asset('assets')}}/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
                                <script src="{{asset('assets')}}/admin/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
                                <script src="{{asset('assets')}}/admin/vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
                                <script src="{{asset('assets')}}/admin/js/init-scripts/data-table/datatables-init.js"></script>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->

@endsection


