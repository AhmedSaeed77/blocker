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



@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">المطورين</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">
                    </span>
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
    <div id='projectbuild'>
        <div>

            <!-- row -->
                <div class="row">

                    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                        <!--div-->
                        <form id='newdev'>
                        <div class="card">
                            <div class="card-body">
                                <div class="main-content-label mg-b-5">
                                   حساب مطور جديد
                                </div>
                                <div class="row row-sm">
                                <div class="col-lg-6">
                                        <label class="form-label">الاسم</label>
                                        <input  required v-model='name' class="form-control" name="name" placeholder=" ادخل الاسم" type="text">
                                </div>
                                <div class="col-lg-6">
                                        <label class="form-label">اللوجو </label>
                                        <input name='logo' multiple class="form-control"  required="" type="file" >
								</div>

                                    <div class="col-lg-3">
                                        <label class="form-label">البريد الالكتروني</label>
                                        <input  class="form-control" name="email" placeholder="Project@email.com" type="email">
                                    </div>
                                    <div class="col-lg-3">
                                            <label class="form-label">الفاكس</label>
                                            <input   class="form-control" name="fax" placeholder="ادخل الفاكس" type="number">
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <label class="form-label">الجوال</label>
                                        <input  class="form-control" name="phone" placeholder="ادخل رقم الجوال" type="number">
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-label">الموقع</label>
                                        <input   class="form-control" name="site" placeholder="ادخل الموقع" type="number">
                                    </div>
                                </div>
                                      <button type="submit" @click="saveData" class="btn btn-primary mt-3 mb-0">  حفظ</button>

                            </div>
                        </div>
                    </div>

                </form>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title mg-b-0"> المطورين </h4>
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
                                            <th class="wd-15p border-bottom-0"> التحكم </th>
                                            <th class="wd-15p border-bottom-0"> الجوال </th>
                                            <th class="wd-15p border-bottom-0"> البريد الالكتروني </th>
                                            <th class="wd-15p border-bottom-0"> الفاكس </th>
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
    <script src="{{ URL::asset('assets/js/form-elements.js') }}"></script>
    @include('vue')
    <script>
    // let table = $('#type');
    $(function() {
             let table = $('#type').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url:"{{ route('dev.index') }}",
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
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data:'phone',
                        name:'phone'
                    },
                    {
                        data:'email',
                        name:'email'
                    },
                    {
                        data:'fax',
                        name:'fax'
                    }
                ]
            });
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
                                url: "{{ route('dev.delete') }}",
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
            'el': '#projectbuild',
            data: {
             name :'',
             error :[]
            },
            methods: {
                validation:function(el , msg){
                    if(el == ''){
                        this.error.push({
                            'err' : 'err'
                        });
                        swal({
                                title:  msg,
                                type: 'warning',
                                confirmButtonText: 'موافق',
                            });
                        return 0;
                    }
                },
                saveData: function(e) {
                   
                    e.preventDefault();
                    this.error = []
                    this.validation(this.name , '  اسم المطور مطلوب    ');
                    if (this.error.length !== 0) {
                            return false
                        }
                    Swal.showLoading()
                    let formData = new FormData(document.getElementById('newdev'));
                    axios.post('{{ route('dev.store') }}', formData).then(response => {
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
                        swal({
                            title: response.response.message,
                            type: 'warning',
                            confirmButtonText: 'موافق',
                        });
                    })
                }
            }
        });
    </script>
@endsection
