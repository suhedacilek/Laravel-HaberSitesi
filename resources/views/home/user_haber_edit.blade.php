@extends('layouts.home')

@section('title', 'Edit New')

@section('headerjs')

    <script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    @endsection

@section('content')

    <section class="breadcrumb_section">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active"><a href="#">Add New</a></li>
                </ol>
            </div>
        </div>
    </section>


    <section class="col-2 left-side">
        <div class="main container">
            <div class="row">
            @include('home.usermenu')

            <!-- Main -->

                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('user_haber_update', ['id' => $data->id])}}" method="post" >

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
                                        <textarea id="detail" name="detail" >{{$data->detail}}</textarea>

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
                                                <option> True</option>
                                                <option> False</option>
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
    </section>
                <!-- End main -->


@endsection


