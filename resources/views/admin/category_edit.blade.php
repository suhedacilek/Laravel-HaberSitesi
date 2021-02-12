@extends('layouts.admin')

@section('title', 'Edit Category')

@section('description')
    Bilgisayar Dünyasının en yeni haberleri..
@endsection
@section('keywords','Bilgisayar','Teknoloji', 'Yazılım')

@section('content')

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Edit</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="{{route('admin_home')}}">Home</a></li>
                        <li class="active">Edit Category</li>
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
                        <div class="card-header">Example Form</div>
                        <div class="card-body card-block">
                            <form action="{{route('admin_category_update', ['id'=>$data->id])}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group">

                                        <div class="input-group-addon">Parent</div>
                                        <select name="parent_id" class="form-control">
                                            <option value="0">Main Category</option>
                                            @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id )selected="selected" @endif>
                                                {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                            </option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Title</div>
                                        <input type="text" id="title" name="title" value="{{$data->title}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Keywords</div>
                                        <input type="text"  name="keywords" value="{{$data->keywords}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Description</div>
                                        <input type="text" name="description" value="{{$data->description}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Slug</div>
                                        <input type="text" name="slug" value="{{$data->slug}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Status</div>
                                        <select name="status" class="form-control">
                                            <option selected="selected">{{$data->status}}</option>
                                            <option>False</option>
                                            <option> True</option>

                                        </select>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success btn-lg btn-block">Update Category</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
