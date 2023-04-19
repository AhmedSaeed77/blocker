@extends('layouts.master')



@section('css')
    <!-- Internal Data table css -->
    <link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection


@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto"> نوع الصفحة </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">
                    </span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection



@section('content')
    <!-- row -->
    <div id='types'>
        <div>
            <div class="row">
                <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                    <!--div-->
                    <div class="card">
                        <form class="needs-validation was-validated" id="createType">
                        <div class="card-body">
                            <div class="main-content-label mg-b-5">
                                إنشاء  جديد
                            </div>
                            <div class="row ">
                                <div class="col-lg-4">
                                    <label class="form-label">  عربي  </label>
                                    <input  required="" class="form-control"  v-model='name_ar' name="name_ar" placeholder="...." type="text">
                                </div>
                                <div class="col-lg-4 mg-t-10 mg-lg-t-0">
                                    <label class="form-label">  انجليزي</label>
                                    <input required="" class="form-control" v-model='name' name="name" placeholder=".... " type="text">
                                </div>
                                <div class="col-lg-4 mg-t-10 mg-lg-t-0">
                                    <label class="form-label">  فرنساوي </label>
                                    <input required="" class="form-control"  v-model='name_fr' name="name_fr" placeholder=".... " type="text">
                                </div>
                            </div>
                            <button type="submit" @click="saveData" class="btn btn-primary mt-3 mb-0">حفظ</button>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex justify-content-between">
                                <i class="mdi mdi-dots-horizontal text-gray"></i>
                            </div>
                            <p class="tx-12 tx-gray-500 mb-2"> الوحدات  <a href=""></a></p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table text-md-nowrap" id="type">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">  الوحدات بالانجليزية </th>
                                            <th class="wd-15p border-bottom-0">  الوحدات بالعربية  </th>
                                            <th class="wd-15p border-bottom-0">  الوحدات بالفرنسية  </th>
                                            <th class="wd-20p border-bottom-0">  الاجراءات</th>
                                            <th class="wd-20p border-bottom-0">  id </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/div-->
            </div>
            <!-- Container closed -->
        </div>
    </div>
    <!-- main-content closed -->
@endsection




@section('js')
    <!-- Internal Data tables -->
    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/table-data.js') }}"></script>
    <script src="{{ URL::asset('js/sweetalert2@11.js') }}"></script>
    <script src="{{ URL::asset('js/sweetalert2.all.js') }}"></script>
    @include('vue')
    <script type="text/javascript">

        $(function() {
            var table = $('#type').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url:"{{ route('type.index') }}",
                    data: function (d) {
                        }
                    },
                columns: [
                    // {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {
                        data: 'type',
                        name: 'type',
                    },
                    {
                        data: 'name_ar',
                        name: 'name_ar',
                    },
                    {
                        data: 'name_fr',
                        name: 'name_fr',
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'id',
                        name: 'id',
                    },
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
                                url: "{{ route('type.delete') }}",
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
            'el': '#types',
            data: {
                name_ar:'',
                name_fr:'',
                name:'',
                error:[]
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
                        this.validation(this.name , '  الاسم باللغه الانجليزيه مطلوب ');
                        this.validation(this.name_ar , '  الاسلم باللغه العربيه مطلوب ');
                        this.validation(this.name_fr , '  الاسم باللغه الفرنسيه مطلوب    ');
                    if (this.error.length !== 0) {
                            return false
                        }
                    let formData = new FormData(document.getElementById('createType'));
                    this.load = true;
                    axios.post('{{ route('type.store') }}', formData).then(response => {
                        console.log(response)
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
                            this.load = false;
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
