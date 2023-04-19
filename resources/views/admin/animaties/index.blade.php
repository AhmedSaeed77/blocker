@extends('layouts.master')
@section('css')
    <!--- Internal Select2 css-->
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
<!--- Internal Select2 css-->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<!---Internal Fileupload css-->
<link href="{{URL::asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
<!---Internal Fancy uploader css-->
<link href="{{URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />
<!--Internal Sumoselect css-->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/sumoselect/sumoselect-rtl.css')}}">
<!--Internal  TelephoneInput css-->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/telephoneinput/telephoneinput-rtl.css')}}">





@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">النماذج</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                     المميزات</span>
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
    <div id='areaId'>
        <div>
            <form id='newarea' >
                @csrf
                <div class="row">

                    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5"> اضافه منطقة جديدة
								</div>
								<div class="row row-sm mg-b-20">
                                <div class="col-lg-4">
                                        <label class="form-label">الميزه باللغه العريه</label>
                                        <input  required="" class="form-control" name="name_ar"  placeholder="Input box" type="text">
                                </div>
                                <div class="col-lg-4">
                                        <label class="form-label">الميزه باللغه بالانجليزيه</label>
                                        <input  required="" class="form-control" name="name"  placeholder="Input box" type="text">
                                </div>
                                <div class="col-lg-4">
                                        <label class="form-label">الميزه باللغه الفرنسيه</label>
                                        <input  required="" class="form-control" name="name_fr"  placeholder="Input box" type="text">
                                </div>
								</div>
                                <br>
                                <button type="submit" @click="saveData" class="btn btn-primary">حفظ</button>
							</div>
						</div>
					</div>
                </div>

            </form>
            <div class="row">
                    <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title mg-b-0"> المميزات </h4>
                                <i class="mdi mdi-dots-horizontal text-gray"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table text-md-nowrap" id="abdo2">
                                    <thead>
                                        <tr>
                                            <th class=" border-bottom-0"> id</th>
                                            <th class=" border-bottom-0"> الاسم باللغه العربيه  </th>
                                            <th class=" border-bottom-0"> الاسم باللغه الانجليزيه  </th>
                                            <th class=" border-bottom-0"> الاسم باللغه الفرنسيه  </th>
                                            <th class=" border-bottom-0"> الاجراءات </th>
                                            <th class=" border-bottom-0"> الوقت  </th>

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
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
    <script>

$(function() {
            var table = $('#abdo2').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url:"{{ route('advanteges.index') }}",
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
                    }, {
                        data: 'created_at',
                        name: 'created_at',
                    }
                ]
            })

            $('#abdo2 tbody').on('click', '.delete', function() {
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
                                url: "{{ route('advanteges.delete') }}",
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
            'el': '#areaId',
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
                async saveData(e) {
                    e.preventDefault();
                    this.error = []
                        this.validation(this.name , '    عنوان المنطه مطلوب   ');
                        this.validation(this.image , '    عنوان المنطقه مطلوب   ');
                        
                        if (this.error.length !== 0) {
                            return false
                        }
                    let formData = new FormData(document.getElementById('newarea'));
                    Swal.showLoading()
                    data = await adawe('{{ route('advanteges.store') }}' , formData)
                    // let result = await axios.post("{{ route('location.store') }}",formData)
                    // console.log(result)
                    // const  ad = new promise((res , rej)=>{
                    //         axios.post(url, data)
                    // });
                    // await ad
                    window.location.href = '{{ route('advanteges.index' )}}';
                }
                
                // saveData: function(e,msg) {
                //     e.preventDefault();
                //     let formData = new FormData(document.getElementById('newarea'));
                //     this.load = true;
                //     axios.post('{{ route('area.store') }}', formData).then(response => {

                //         if (response.data == "") {
                //             swal({
                //                 //response.data.msg
                //                 title: "Not Add",
                //                 type: 'warning',
                //                 confirmButtonText: 'موافق',
                //             });
                //         } else {
                //             swal({
                //                 //response.data.msg "Item Add"
                //                 title: "Item Add",
                //                 type: 'success',
                //                 confirmButtonText: 'موافق',
                //             });
                //             this.load = false;
                //         }
                //     }).catch(response => {
                //     //    console.log(response);
                //     })
                // }

            }
           
        });
    </script>
@endsection
