@extends('layouts.admin')

@section('title', 'Edit FAQ ')

@section('javascript')

    <script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Edit FAQ </h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="{{route('admin_home')}}">Home</a></li>
                        <li class="active">Edit FAQ</li>
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
                        <div class="card-header">Edit FAQ</div>
                        <div class="card-body card-block">

                            <form action="{{route('admin_faq_update', ['id' => $data->id])}}" method="post" >

                                @csrf

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Position</div>
                                        <input type="text" id="position"  value="{{$data->position}}" name="position" class="form-control">
                                    </div>
                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Question</div>
                                                        <input type="text" id="question"  value="{{$data->question}}" name="question" class="form-control">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Answer</div>
                                                        <textarea id="answer" name="answer">{{$data->answer}}</textarea>

                                                        <script>
                                                            CKEDITOR.replace('answer');
                                                        </script>

                                                    </div>

                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-addon">Status</div>
                                                            <select name="status" class="form-control">
                                                                <option selected="selected">{{$data->status}}/option>
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
