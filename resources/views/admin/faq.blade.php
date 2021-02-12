@extends('layouts.admin')

@section('title', 'Frequently Asked Question List')

@section('content')

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <a href="{{route('admin_faq_add')}}" type="button" class="btn btn-primary btn-lg active">Add FAQ</a>
                @include('home.message')
                </div>
            </div>

        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="{{route('admin_home')}}">Home</a></li>
                        <li class="active">Frequently Asked Question</li>
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
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Position</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Status</th>
                                    <th style="" colspan="2">Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($datalist as $rs)

                                    <tr>
                                        <td>{{$rs ->id}}</td>
                                        <td>{{$rs ->position}}</td>
                                        <td>{{$rs ->question}}</td>
                                        <td>{!! $rs ->answer !!}</td>
                                        <td>{{$rs ->status}}</td>

                                        <td><a href="{{route('admin_faq_edit', ['id' => $rs-> id])}}"> <img src="{{asset('assets/admin/images')}}/edit.png" height="25"></a></td>
                                        <td><a href="{{route('admin_faq_delete', ['id' => $rs-> id])}}" onclick="return confirm('Delete! Are you sure?')"><img src="{{asset('assets/admin/images')}}/delete.png" height="25"></a></td>
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


