@extends('layouts.master')
@section('css')
    <!-- Internal Data table css -->
    <link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!---Internal Owl Carousel css-->
    <link href="{{ URL::asset('assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <!---Internal  Multislider css-->
    <link href="{{ URL::asset('assets/plugins/multislider/multislider.css') }}" rel="stylesheet">
    <!--- Select2 css -->
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> --}}
    <link href="{{ url('assets/editor.css') }}" type="text/css" rel="stylesheet" />
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
    <div id='blogId'>
        <div>

            <!-- row -->
            <div class="row">
                <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                    <!--div-->
                    <form action="{{ route('views.store') }}" method="post" enctype="multipart/form-data" >
                    @csrf
                        <div class="card">
                            <div class="card-body">
                                <div class="main-content-label mg-b-5">
                                    اضافة رأى جديد
                                </div>
                                <div class="row row-sm">
                                    <div class="col-lg">
                                        <label class="form-label"> الاسم </label>
                                        <input required="" class="form-control"  name="name" placeholder="Input box"
                                            type="text">
                                    </div>
                                </div>
                                <div class="row row-sm">
                                    <div class="col-lg">
                                        <label class="form-label"> التعليق </label>
                                        <input required="" class="form-control"  name="comment" placeholder="Input box"
                                            type="text">
                                    </div>
                                </div>
                                <div class="row row-sm">
                                <div class="col-lg-12 ">
										<p class="mg-b-10">  التقيم </p>
                                        <select  name='grade'   class="form-control">
                                            <option value="A" >A</option>
                                            <option value="B" >B</option>
                                            <option value="C" >C</option>
                                            <option value="D" >D</option>
										</select>
									</div>
                                </div>
                                <div class="col-lg-12 mt-5">
                                    <label class="form-label"> صوره المقال </label>
                                    <input   name='photo' multiple class="form-control"
                                        required="" type="file">
                                </div>
                                <button type="submit"  class="btn btn-primary mt-3 mb-0"> حفظ </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title mg-b-0"> الارااء </h4>
                                <i class="mdi mdi-dots-horizontal text-gray"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                    style="text-align: center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>الاسم</th>
                            <th>التعليق</th>
                            <th>التقيم</th>
                            <th>العمليات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        @foreach ($views as $view)
                            <tr>
                                <?php $i++; ?>
                                <td>{{ $i }}</td>
                                <td>{{ $view->name }}</td>
                                <td>{{ $view->comment }}</td>
                                <td>{{ $view->grade }}</td>
                                <td>
                                    <a href="{{ route('views.edit',$view -> id) }}" class="btn btn-primary">تعديل </a>
                                    <a href="{{route('views.delete',$view -> id)}}" class="btn btn-danger"> حذف </a>
                                </td>
                            </tr>

                            

                        @endforeach
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
    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
    <!--Internal  Datatable js -->
    <script src="{{ URL::asset('assets/js/table-data.js') }}"></script>
    <!--Internal  Datepicker js -->
    <script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <!-- Internal Select2 js-->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!-- Internal Modal js-->
    <script src="{{ URL::asset('assets/js/modal.js') }}"></script>

    @include('vue')
    <script>
        $(function() {
            var table = $('#type').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('blogs.index') }}",
                    data: function(d) {}
                },
                columns: [
                    // {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {
                        data: 'id',
                        name: 'id',
                    },
                    {
                        data: 'title',
                        name: 'title',
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                    }
                ]
            })

            $('#type tbody').on('click', '.delete', function() {
                var value = $(this).attr("value");
                Swal.fire({
                    title: ' هل انت متأكد من حذف ',
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
        content = new Vue({
            'el': '#blogId',
            data: {
                load: false,
                name_ar: '',
                name_en: '',
                name_fr: '',
                art_ar: '',
                art_en: '',
                article_fr: '',
                file1: '',
                Count: 0,
                error: []
            },
            methods: {
                validation: function(el, msg) {
                    if (el == '') {
                        this.error.push({
                            'err': 'err'
                        });
                        swal({
                            title: msg,
                            type: 'warning',
                            confirmButtonText: 'موافق',
                        });
                        return 0;
                    }
                },
                fileChange1(event) {
                    this.file1 = this.$refs.image.files.length;
                },
                saveData: function(e) {
                    e.preventDefault();
                    this.error = []
                    this.validation(this.name_ar , 'لا يمكن ترك العنوان باللغه العربيه فارغا')
                    this.validation(this.name_en , 'لا يمكن ترك العنوان باللغه الانجليزيه فارغا')
                    this.validation(this.name_fr , 'لا يمكن ترك العنوان باللغه الفرنسيه فارغا')
                    this.validation(this.art_ar , 'لا يمكن ترك المقال باللغه العربيه فارغا')
                    this.validation(this.art_en , 'لا يمكن ترك المقال باللغه الانجليزيه فارغا')
                    this.validation(this.article_fr , 'لا يمكن ترك المقال   فارغا')
                    this.validation(this.file1 , ' الصوره مطلوبه')
                    if (this.error.length !== 0) {
                            return false
                    }
                    Swal.showLoading()
                    let formData = new FormData(document.getElementById('newblog'));
                    axios.post('{{ route('blogs.store') }}', formData).then(response => {
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
                            $('#type').DataTable().draw()
                        }
                    }).catch(response => {
                        console.log(response)
                        // var response = $.parseJSON(reject.responseText);

                        // $.each(response.errors, function(name, msg) {
                        //     swal({
                        //         title: msg[0],
                        //         type: 'warning',
                        //         confirmButtonText: 'ok',
                        //     });
                        //     return 0
                        // });
                    })
                }
            }
        });
    </script>

@endsection
