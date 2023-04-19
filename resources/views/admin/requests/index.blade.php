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
                <h4 class="content-title mb-0 my-auto"> طلبات التواصل  </h4>

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

            <div class="row">
                    <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title mg-b-0"> طلبات التواصل  </h4>
                                <i class="mdi mdi-dots-horizontal text-gray"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table text-md-nowrap" id="type">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0"> id</th>
                                            <th class="wd-15p border-bottom-0"> الاسم </th>
                                            <th class="wd-15p border-bottom-0"> action </th>
                                            <th class="wd-15p border-bottom-0"> time </th>
                                            <th class="wd-15p border-bottom-0"> time </th>
                                            <th class="wd-15p border-bottom-0"> time </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

            <!-- row closed -->
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
         $(function() {
            var table = $('#type').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url:"{{ route('requests.index') }}",
                    data: function (d) {
                        }
                    },
                columns: [
                    // {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {
                        data: 'id',
                        name: 'id',
                    },
                    {
                        data: 'name',
                        name: 'name',
                    },
                    {
                        data: 'email',
                        name: 'email',
                    },
                    {
                        data: 'phone',
                        name: 'phone',
                    },
                    {
                        data: 'country',
                        name: 'country',
                    },
                    {
                        data: 'city',
                        name: 'city',
                    },
                    {
                        data: 'msg',
                        name: 'msg',
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    }
                ]
            })

            $('#type tbody').on('click', '.delete', function() {
                    var value = $(this).attr("value");
                    Swal.fire({
                        title: ' هل انت متأكد من حذف ' ,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'متأكد !'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                type: 'post',
                                url: "{{ route('blogs.delete') }}",
                                data: {
                                    '_token': "{{ csrf_token() }}",
                                    'id': value,
                                },
                                success: (response) => {
                                    if (response) {
                                        Swal.fire({
                                            position: 'top-center',
                                            icon: 'success',
                                            title: 'تم الحذف  بنجاح',
                                            showConfirmButton: false,
                                            timer: 1500
                                        })
                                        table.ajax.reload(null, false);
                                    }
                                },
                                error: function(reject) {
                                    console.log(reject)
                                }

                            })

                        }
                    })
                    // console.log($(this).attr("value"));
            });

        });

    </script>
@endsection
