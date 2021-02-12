@extends('layouts.admin')

@section('title', 'Edit User ')

@section('content')

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Edit haber</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="{{route('admin_home')}}">Home</a></li>
                        <li class="active">Edit User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div>

    </div>
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">Edit User</div>
                        <div class="card-body card-block">

                            <form action="{{route('admin_user_update',['id'=>$data->id])}}" role="form" method="post" enctype="multipart/form-data">

                                @csrf
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Name</div>
                                        <input type="text"  name="name" value="{{$data->name}}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Email</div>
                                        <input type="text"  name="email" value="{{$data->email}}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Phone</div>
                                        <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Address</div>
                                        <input type="text" name="address" value="{{$data->address}}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Image</div>
                                        <input type="file" name="image"  class="form-control">
                                        @if($data->profile_photo_path)
                                            <img src="{{Storage::url($data->profile_photo_path)}}" height="200" alt="">
                                        @endif

                                    </div>
                                </div>


                                <button type="submit" class="btn btn-success btn-lg btn-block">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
