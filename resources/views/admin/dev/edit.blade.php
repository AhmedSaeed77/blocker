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
                                    تعديل حساب مطور
                                </div>
                                <div class="row row-sm">
                                <div class="col-lg-6">
                                        <label class="form-label">الاسم</label>
                                        <input  required v-model='name' value="{{$dev->name}}" class="form-control" name="name"  type="text">
                                </div>
                                <div class="col-lg-6">
                                        <label class="form-label">اللوجو </label>
                                        <input name='logo'  class="form-control"  type="file" >
								</div>

                                    <div class="col-lg-3">
                                        <label class="form-label">البريد الالكتروني</label>
                                        <input  class="form-control"  value="{{$dev->email}}" name="email" placeholder="Project@email.com" type="email">
                                    </div>
                                    <div class="col-lg-3">
                                            <label class="form-label">الفاكس</label>
                                            <input   class="form-control" value="{{$dev->fax}}" name="fax" placeholder="Input box" type="number">
                                    </div>
                                    <div class="col-lg mg-t-10 mg-lg-t-0">
                                        <label class="form-label">الجوال</label>
                                        <input  class="form-control" value="{{$dev->phone}}" name="phone" placeholder="Input box" type="number">
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-label">الموقع </label>
                                        <input   class="form-control" value="{{$dev->site}}" name="site" placeholder="Input box" type="number">
                                    </div>
                                </div>
                                      <button type="submit" @click="saveData" class="btn btn-primary mt-3 mb-0">  حفظ</button>
                            </div>
                        </div>
                    </div>

                </form>
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
    <script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <!--Internal Fileuploads js-->
    <script src="{{URL::asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>

    @include('vue')
    <script>

        content = new Vue({
            'el': '#projectbuild',
            data: {
             name :'{!! $dev->name !!}',
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
                        formData.append('id',{!! $dev->id !!})
                    axios.post('{{ route('dev.update') }}', formData).then(response => {
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
                            window.location.href = '{{ route('dev.index' )}}';
                        }
                    }).catch(response => {
                        console.log(response);
                    })
                }
            }
        });
    </script>
@endsection
