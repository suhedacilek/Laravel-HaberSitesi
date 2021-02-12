@extends('layouts.admin')

@section('title', 'Edit Haber ')

@section('javascript')

    <script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

@endsection

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
                        <li class="active">Edit Haber</li>
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
                        <div class="card-header">Edit Haber</div>
                        <div class="card-body card-block">

                            <form action="{{route('admin_haber_update', ['id' => $data->id])}}" method="post" enctype="multipart/form-data">

                                @csrf
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Category</div>
                                        <select name="category_id" class="form-control">

                                            @foreach($datalist as $rs)

                                                <option value="{{$rs->id}}" @if ($rs->id == $data -> parent_id) selected = 'selected' @endif>

                                                {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}

                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Title</div>
                                        <input type="text"  name="title" value="{{$data->title}}" class="form-control">
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
                                            <div class="input-group-addon">Detail</div>
                                            <textarea id="summernote" name="detail" >{{$data->detail}}</textarea>

                                            <script>
                                                CKEDITOR.replace('detail');
                                            </script>

                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon">Image</div>
                                                <input type="file" name="image"  class="form-control">
                                                @if($data->image)
                                                    <img src="{{Storage::url($data->image)}}" height="100" alt="">
                                                @endif

                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon">Type</div>
                                                <input type="text" name="type"  class="form-control">
                                            </div>
                                        </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Status</div>
                                        <select name="status" class="form-control">
                                            <option selected="selected">{{$data->status}}</option>
                                            <option> False</option>
                                            <option> True</option>
                                        </select>
                                    </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg btn-block">Edit haber</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
