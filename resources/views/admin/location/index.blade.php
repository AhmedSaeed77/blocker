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
                <h4 class="content-title mb-0 my-auto"> الاماكن </h4>

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
                    <form id='newlocation'>
                        <div class="card">
                            <div class="card-body">
                                <div class="main-content-label mg-b-5">
                                  اضافة مكان رئيسي جديد
                                </div>
                                <div class="row row-sm">
                                    <div class="col-lg-4">
                                        <label class="form-label">   الاسم باللغه العربيه </label>
                                        <input required="" v-model='name_ar' class="form-control" name="name" placeholder=" ادخل الاسم"
                                            type="text">
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="form-label">    الاسم باللغه النجليزيه </label>
                                        <input required="" v-model='name' class="form-control" name="name_ar" placeholder="ادخل الاسم"
                                            type="text">
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="form-label">   الاسم باللغه الفرنسيه </label>
                                        <input required="" v-model='name_fr' class="form-control" name="name_fr" placeholder="ادخل الاسم"
                                            type="text">
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label class="form-label"> الصورة</label>
                                        <input name='image' multiple class="form-control" required="" type="file">
                                    </div>
                                </div>

                            <button type="submit" @click="saveData" class="btn btn-primary mt-3 mb-0">حفظ</button>

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
                                <h4 class="card-title mg-b-0"> الاماكن </h4>
                                <i class="mdi mdi-dots-horizontal text-gray"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table text-md-nowrap" id="type">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0"> id</th>
                                            <th class="wd-15p border-bottom-0"> اسم المكان </th>
                                            <th class="wd-15p border-bottom-0"> الاجراءات </th>
                                            <th class="wd-15p border-bottom-0">  عدد الاحياء التابعة</th>
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


         $(function() {
            var table = $('#type').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url:"{{ route('location.index') }}",
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
                        data: 'location',
                        name: 'location',
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data :'count',
                        name:'count'
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
                            data = {
                                    '_token': "{{ csrf_token() }}",
                                    'id': value,
                                }
                            adawe('{{ route('location.delete') }}' , data)
                            table.ajax.reload(null, false);
                        }
                    })
                    // console.log($(this).attr("value"));
            });

        });
        content = new Vue({
            'el': '#blogId',
            data: {
                name: '',
                en: true,
                fr: false,
                load: false,
                Count: 0,
            },
            methods: {
                validation: function() {

                },
                async saveData(e) {
                    e.preventDefault();
                    this.error = []
                        this.validation(this.name , '    عنوان المنطه مطلوب   ');
                        this.validation(this.image , '    عنوان المنطقه مطلوب   ');
                        
                        if (this.error.length !== 0) {
                            return false
                        }
                    let formData = new FormData(document.getElementById('newlocation'));
                    Swal.showLoading()
                    data = await adawe('{{ route('location.store') }}' , formData)
                    // let result = await axios.post("{{ route('location.store') }}",formData)
                    // console.log(result)
                    // const  ad = new promise((res , rej)=>{
                    //         axios.post(url, data)
                    // });
                    // await ad
                }
            }
        });
    </script>
@endsection
