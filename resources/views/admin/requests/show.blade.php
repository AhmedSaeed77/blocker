@extends('layouts.master')
@section('css')
    <!--- Internal Select2 css-->
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!--- Internal Select2 css-->
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!---Internal Fileupload css-->
    <link href="{{ URL::asset('assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css" />
    <!---Internal Fancy uploader css-->
    <link href="{{ URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />
    <!--Internal Sumoselect css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/sumoselect/sumoselect-rtl.css') }}">
    <!--Internal  TelephoneInput css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/telephoneinput/telephoneinput-rtl.css') }}">
    <link href="{{URL::asset('assets/plugins/quill/quill.snow.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/quill/quill.bubble.css')}}" rel="stylesheet">
<link href="node_modules/froala-editor/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="node_modules/froala-editor/js/froala_editor.pkgd.min.js"></script>
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الارااء</h4>

            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">


            <div class="pr-1 mb-3 mb-xl-0">
                <button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
            </div>

        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
                <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                    <!--div-->
                    <form action="" method="post" enctype="multipart/form-data" >
                    @csrf
                        <div class="card">
                            <div class="card-body">
                                <div class="main-content-label mg-b-5">
                                      معلومات التواصل
                                </div>
                                <div class="row row-sm">
                                    <div class="col-lg">
                                        <label class="form-label"> الاسم </label>
                                        <input class="form-control" value="{{ $req->name }}" name="name" 
                                            type="text" readonly>
                                    </div>
                                </div>
                                <div class="row row-sm">
                                    <div class="col-lg">
                                        <label class="form-label"> الايميل </label>
                                        <input required="" class="form-control"  value="{{ $req->email }}" name="comment" required
                                            type="text" readonly>
                                    </div>
                                </div>
                                <div class="row row-sm">
                                    <div class="col-lg">
                                        <label class="form-label">الجوال </label>
                                        <input class="form-control"  value="{{ $req->phone }}" name="comment" 
                                            type="text" readonly>
                                    </div>
                                </div>
                                <div class="row row-sm">
                                    <div class="col-lg">
                                        <label class="form-label"> الرساله </label>
                                        <input class="form-control"  value="{{ $req->msg }}" name="comment" 
                                            type="text" readonly>
                                    </div>
                                </div>
                                <div class="row row-sm">
                                    <div class="col-lg">
                                        <label class="form-label"> البلد </label>
                                        <input class="form-control"  value="{{ $req->country }}" name="comment"
                                            type="text" readonly>
                                    </div>
                                </div>
                                <div class="row row-sm">
                                    <div class="col-lg">
                                        <label class="form-label"> المدينه </label>
                                        <input class="form-control"  value="{{ $req->city }}" name="comment" 
                                            type="text" readonly>
                                    </div>
                                </div>
                                <div class="row row-sm">
                                    <div class="col-lg">
                                        <label class="form-label"> keep update </label>
                                        <input type="checkbox" @if( $req->keep  == "on") checked @endif>
                                    </div>
                                </div><br><br>
                                <a class="btn btn-dark" href="{{route('requests.index')}}" role="button">رجوع</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    <!-- main-content closed -->
@endsection

@section('js')
    <!--Internal  Select2 js -->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!-- Internal Jquery.steps js -->
    <script src="{{ URL::asset('assets/plugins/jquery-steps/jquery.steps.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>
    <!--Internal  Form-wizard js -->
    <script src="{{ URL::asset('assets/js/form-wizard.js') }}"></script>
    <!--Internal  Datepicker js -->
    <script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <!--Internal Fileuploads js-->
    <script src="{{ URL::asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>
    <!--Internal Fancy uploader js-->
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>
    <!--Internal  Form-elements js-->
    <script src="{{ URL::asset('assets/js/advanced-form-elements.js') }}"></script>
    <script src="{{ URL::asset('assets/js/select2.js') }}"></script>
    <!--Internal Sumoselect js-->
    <script src="{{ URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js') }}"></script>
        <script src="{{URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
    <!--Internal quill js -->
<script src="{{URL::asset('assets/plugins/quill/quill.min.js')}}"></script>
<!-- Internal Form-editor js -->
<script src="{{URL::asset('assets/js/form-editor.js')}}"></script>
    @include('vue')
   
@endsection
