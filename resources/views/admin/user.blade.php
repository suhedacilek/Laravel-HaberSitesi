@extends('layouts.admin')

@section('title', 'User List')

@section('content')

    <div class="breadcrumbs">
        <div class="col-sm-4">


        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="{{route('admin_home')}}">Home</a></li>
                        <li class="active">User</li>
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
                            <strong class="card-title">Users</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Roles</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($datalist as $rs)
                                    <tr>
                                        <td>{{$rs ->id}}</td>
                                        <td width="80">
                                            @if($rs->profile_photo_path)
                                                <img src="{{Storage::url($rs->profile_photo_path)}}" height="60" style="border-radius: 10px" alt="">
                                            @endif
                                        </td>

                                        <td>{{$rs ->name}}</td>
                                        <td>{{$rs -> email}}</td>
                                        <td>{{$rs -> phone}}</td>
                                        <td>{{$rs -> address}}</td>

                                        <td> @foreach($rs->roles as $row)

                                            {{$row->name}},
                                            @endforeach
                                            <a href="{{route('admin_user_roles',['id'=> $rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=800, height=600')">
                                                <i class="menu-icon fa fa-plus-circle"></i>
                                            </a>
                                        </td>

                                        <td><a href="{{route('admin_user_edit', ['id' => $rs->id])}}"> <img src="{{asset('assets/admin/images')}}/edit.png" height="25"></a></td>
                                        <td><a href="{{route('admin_user_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete! Are you sure?')"><img src="{{asset('assets/admin/images')}}/delete.png" height="25"></a></td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->

@endsection


