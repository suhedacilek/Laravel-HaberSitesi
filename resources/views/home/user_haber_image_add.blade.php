<?php
<html>
<head>
    <title>Image Gallery</title>

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/style.css">
</head>
<body>


    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Add Image</div>
                        <div class="card-body card-block">

                            <form action="{{route('user_image_store', ['product_id' => $data->id])}}" method="post" enctype="multipart/form-data">
@csrf
<div class="form-group">
    <div class="input-group">
        <div class="input-group-addon">Title</div>
        <input type="text" name="title" class="form-control">
    </div>
</div>

<div class="form-group">
    <div class="input-group">
        <div class="input-group-addon">Image</div>
        <input type="file" name="image" class="form-control">
    </div>
</div>

<button type="submit" class="btn btn-success btn-lg btn-block">Add image</button>
<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Image</th>
        <th>Action</th>

    </tr>
    </thead>
    <tbody>

    @foreach( $images as $rs)
        <tr>
            <td>{{ $rs->id }}</td>
            <td>{{ $rs->title }}</td>

            <td>

                @if( $rs->image )
                    <img src="{{ Storage::url($rs->image) }}" height="40" alt="">
                @endif

            </td>
            <td><a href="{{route('user_image_delete', ['id' => $rs->id, 'product_id'=>$data->id])}}" onclick="return confirm('Record will be deleted')"><i class="menu-icon fa fa-trash-o"></i></a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
