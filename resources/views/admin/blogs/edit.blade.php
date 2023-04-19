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
                <h4 class="content-title mb-0 my-auto">المقالات</h4>

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
    <div id='blogId'>
        <div>

            <!-- row -->
            <div class="row">
                <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                    <!--div-->
                    <form id='editblog'>
                        <div class="card">
                            <div class="card-body">
                                <div class="main-content-label mg-b-5">
                                   تعديل مقالة
                                </div>
                                <div class="row row-sm">
                                    <div class="col-lg-4">

                                        <label class="form-label">العنوان بالانجليزيه </label>
                                        <input required="" value="{{ $blog->title }}" class="form-control" name="title" placeholder="Input box"
                                            type="text">
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="form-label">العنوان بالعربيه</label>
                                        <input required="" class="form-control"  value="{{ $blog->title_ar }}" name="title_ar" placeholder="Input box"
                                            type="text">
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="form-label">العنوان بالفرنسيه </label>
                                        <input required="" class="form-control" name="title_fr" value="{{ $blog->title_fr }}" placeholder="Input box"

                                            type="text">
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class="col-lg">

                                        <label class="form-label">المقال بالانجليزيه</label>
                                        <textarea required="" class="form-control" name="article" placeholder="Textarea" rows="3"> {{ $blog->article }} </textarea>
                                    </div>
                                    <div class="col-lg">
                                        <label class="form-label">المقال بالعربيه</label>
                                        <textarea required="" class="form-control" name="article_ar" placeholder="Textarea" rows="3">  {{ $blog->article_ar }} </textarea>
                                    </div>
                                    <div class="col-lg">
                                        <label class="form-label">المقال بالفرنسيه</label>
                                        <textarea required="" class="form-control" name="article_fr" placeholder="Textarea" rows="3">  {{ $blog->article_fr }}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                        <label class="form-label">صوره المقال </label>
                                        <input name='image' multiple class="form-control" required="" type="file">
                                </div>
                                <div class="d-flex justify-content-between"  >
                                <button type="submit" @click="saveData" class="btn btn-primary mt-3 mb-0">تعديل</button>
                
                                </div>
                            


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Container closed -->
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
    <script>
        content = new Vue({
            'el': '#blogId',
            data: {
                ar: false,
                en: true,
                fr: false,
                load: false,
                Count: 0
            },
            methods: {
                validation: function() {

                },
                saveData: function(e) {
                    e.preventDefault();
                    // Swal.fire({
                    //       title: 'جارى الحفظ',
                    //      showConfirmButton: false,
                    //      timer: 150000
                    // })
                        Swal.showLoading()
                    let formData = new FormData(document.getElementById('editblog'));
                        formData.append('id',{!! $blog->id !!})
                    axios.post('{{ route('blogs.update') }}', formData).then(response => {
                        if (response.data.err == true) {
                            swal({
                                title: response.data.msg,
                                type: 'warning',
                                confirmButtonText: 'موافق',
                            });
                        } else {
                            swal({
                                title: response.data.msg,
                                type: 'success',
                                confirmButtonText: 'موافق',
                            });
                            window.location.href = '{{ route('blogs.index' )}}';
                        }
                    }).catch(response => {
                       console.log(response)
                    })
                }
            }
        });
    </script>
@endsection
