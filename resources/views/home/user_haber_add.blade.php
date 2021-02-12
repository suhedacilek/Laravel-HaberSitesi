@extends('layouts.home')

@section('title', 'Add New')
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
                            <form action="{{route('user_haber_store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Category</div>
                                        <select name="category_id" class="form-control">

                                            @foreach($datalist as $rs)
                                                <option value="{{$rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Title</div>
                                        <input type="text" id="title" name="title" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Keywords</div>
                                        <input type="text"  name="keywords" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Description</div>
                                        <input type="text" name="description" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Slug</div>
                                        <input type="text" name="slug" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Detail</div>
                                        <textarea id="detail" name="detail" ></textarea>

                                        <script>
                                            CKEDITOR.replace('detail');
                                        </script>

                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">Image</div>
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">Type</div>
                                            <input type="text" name="type" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">Status</div>
                                            <select name="status" class="form-control">
                                                <option selected="selected">False</option>
                                                <option> True</option>

                                            </select>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success btn-lg btn-block">Add New</button>
                                </div>
                            </form>
                        </div>
                    </div>
              </div>
        </div>
        </div>
    </section>
                <!-- End main -->


@endsection


