@extends('layouts.admin')

@section('title', 'Edit Setting ')

@section('javascript')

    <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>

@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Edit Setting</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="{{route('admin_home')}}">Home</a></li>
                        <li class="active">Edit Setting</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <form action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="default-tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-general-tab" data-toggle="tab" href="#nav-general" role="tab" aria-controls="nav-general" aria-selected="true"><b>General</b></a>
                                    <a class="nav-item nav-link" id="nav-smtpmail-tab" data-toggle="tab" href="#nav-smtpmail" role="tab" aria-controls="nav-smtpmail" aria-selected="false"><b>Smtp Email</b></a>
                                    <a class="nav-item nav-link" id="nav-social-tab" data-toggle="tab" href="#nav-social" role="tab" aria-controls="nav-social" aria-selected="false"><b>Social Media</b></a>
                                    <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false"><b>About Us</b></a>
                                    <a class="nav-item nav-link" id="nav-contactpage-tab" data-toggle="tab" href="#nav-contactpage" role="tab" aria-controls="nav-contactpage" aria-selected="false"><b>Contact Page</b></a>
                                    <a class="nav-item nav-link" id="nav-reference-tab" data-toggle="tab" href="#nav-reference" role="tab" aria-controls="nav-reference" aria-selected="false"><b>References</b></a>
                                </div>
                            </nav>
                            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                 <div class="tab-pane fade show active" id="nav-general" role="tabpanel" aria-labelledby="nav-general-tab">
                                <div class="form-group">
                                    <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label><b>Title</b></label>
                                    <input type="text" id="title" name="title" value="{{$data->title}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label><b>Keywords</b></label>
                                    <input type="text"  name="keywords" value="{{$data->keywords}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label><b>Description</b></label>
                                    <input type="text" name="description" value="{{$data->description}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label><b>Company</b></label>
                                    <input type="text" name="company" value="{{$data->company}}" class="form-control">

                                </div>

                                <div class="form-group">
                                    <label><b>Address</b></label>
                                    <input type="text" name="address" value="{{$data->address}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label><b>Phone</b></label>
                                    <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label><b>Email</b></label>
                                    <input type="text" name="email" value="{{$data->email}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label><b>Fax</b></label>
                                    <input type="text" name="fax" value="{{$data->fax}}" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label><b>Status</b></label>
                                    <select name="status" class="form-control">
                                        <option selected="selected">{{$data->status}}</option>
                                        <option> True</option>
                                        <option> False</option>
                                    </select>
                                </div>

                            </div>

                                <div class="tab-pane fade" id="nav-smtpmail" role="tabpanel" aria-labelledby="nav-smtpmail-tab">
                                    <div class="form-group">
                                        <label><b>Smtpserver</b></label>
                                        <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label><b>Smtpemail</b></label>
                                        <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label><b>Smtppassword</b></label>
                                        <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label><b>Smtpport</b></label>
                                        <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control">
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="nav-social" role="tabpanel" aria-labelledby="nav-social-tab">
                                    <div class="form-group">
                                        <label><b>Facebook</b></label>
                                            <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label><b>Instagram</b></label>
                                            <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label><b>Twitter</b></label>
                                            <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control">
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                    <div class="form-group">
                                        <label><b>About Us</b></label>
                                            <textarea id="aboutus" name="aboutus" value="{{$data->aboutus}}" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-contactpage" role="tabpanel" aria-labelledby="nav-contactpage-tab">
                                    <div class="form-group">
                                        <label><b>Contact</b></label>
                                            <textarea id="contact" name="contact" value="{{$data->contact}}" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-reference" role="tabpanel" aria-labelledby="nav-reference-tab">
                                    <div class="form-group">
                                        <label><b>References</b></label>
                                            <textarea id="references" name="references" value="{{$data->references}}" class="form-control"></textarea>
                                    </div>

                                    <script>

                                        ClassicEditor
                                            .create( document.querySelector( '#aboutus' ) )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                    </script>

                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#contact' ) )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                    </script>
                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#references' ) )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                    </script>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg btn-block">Add Setting</button>
                            </div>


                        </div>
                    </div>

                 </div>
        </div>
        </div>
    </form>
@endsection
