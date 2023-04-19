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
                <h4 class="content-title mb-0 my-auto"> الاماكن الرئيسية</h4>

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
                    <form id='editlocation'>
                        <div class="card">
                            <div class="card-body">
                                <div class="main-content-label mg-b-5">
                                        تعديل مكان
                                </div>
                                <div class="row row-sm">
                                    <div class="col-lg-4">
                                        <label class="form-label">  الاسم باللغه العربيه </label>
                                        <input required="" class="form-control" name="name_ar" value="{{ evaluateSp($location,'ar')['location'] }}"
                                            type="text">
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="form-label">  الاسم باللغه الانجليزيه </label>
                                        <input required="" class="form-control" name="name" value="{{ $location->location }}"
                                            type="text">
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="form-label">  الاسم باللغه الفرنسيه </label>
                                        <input required="" class="form-control" name="name_fr" value="{{ evaluateSp($location,'fr')['location'] }}"
                                            type="text">
                                    </div>
                                   
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-label"> الصورة</label>
                                    <input name='image' multiple class="form-control" required="" type="file">
                                </div>
                                <div class="d-flex justify-content-between"  >
                                    <button type="submit" @click="saveData" class="btn btn-primary mt-3 mb-0"> تعديل</button>
                                    
                                </div>
                            
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <!-- row closed -->
        </div>
        <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection

@section('js')


    <!--Internal  Datepicker js -->
    <script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <!-- Internal Select2 js-->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!-- Internal Modal js-->
    <script src="{{ URL::asset('assets/js/modal.js') }}"></script>
    <script src="{{ URL::asset('assets/js/form-elements.js') }}"></script>
    <!-- @include('vue')
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
                    let formData = new FormData(document.getElementById('newblog'));
                    this.load = true;
                    axios.post('{{ route('blogs.update') }}', formData).then(response => {
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
                       console.log(response)
                    })
                }
            }
        });
    </script> -->
    @include('vue')
    <script>

        content = new Vue({
            'el': '#blogId',
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
                    //this.validation(this.name , '  اسم المطور مطلوب    ');
                    if (this.error.length !== 0) {
                            return false
                        }
                    Swal.showLoading()
                    let formData = new FormData(document.getElementById('editlocation'));
                        formData.append('id',{!! $location->id !!})
                    axios.post('{{ route('location.update') }}', formData).then(response => {
                        console.log(response);
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
                            window.location.href = '{{ route('location.index' )}}';
                        }
                    }).catch(response => {
                        console.log(response);
                    })
                }
            }
        });
    </script>
@endsection
