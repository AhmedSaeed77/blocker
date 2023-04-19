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
                <h4 class="content-title mb-0 my-auto"> تعديل ميزه </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/

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
            <form id="editarea">
                @csrf
                <div class="row">

                    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">

								<div class="main-content-label mg-b-5">  تعديل ميزه
								</div>

								<div class="row row-sm mg-b-20">
                                <div class="col-lg-4">
                                        <label class="form-label">الميزه باللغه العريه</label>
                                        <input  required="" class="form-control" name="name_ar" value="{{$ad->name_ar}}" type="text">
                                </div>
                                <div class="col-lg-4">
                                        <label class="form-label">الميزه باللغه بالانجليزيه</label>
                                        <input  required="" class="form-control" name="name"  value="{{$ad->name}}" type="text">
                                </div>
                                <div class="col-lg-4">
                                        <label class="form-label">الميزه باللغه الفرنسيه</label>
                                        <input  required="" class="form-control" name="name_fr"  value="{{$ad->name_fr}}" type="text">
                                </div>
								</div>
									

								</div>
                                <div class="d-flex justify-content-between"  >
                                    <button type="submit" @click="saveData" class="btn btn-primary mt-3 mb-0">  تعديل</button>
                                    <!-- <a  class="btn btn-dark mt-3 mb-0"  href="{{route('area.index')}}" role="button">رجوع</a> -->
                                </div>
							</div>
						</div>
					</div>
                </div>

            </form>    <!-- row closed -->
        </div>
        <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection

@section('js')
 <!--Internal  Select2 js -->

    <!--Internal  Form-elements js-->
    <script src="{{URL::asset('assets/js/advanced-form-elements.js')}}"></script>
    <script src="{{URL::asset('assets/js/select2.js')}}"></script>
    <!--Internal Sumoselect js-->
    <script src="{{URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script>
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
                    Swal.showLoading()
                    let formData = new FormData(document.getElementById('editarea'));
                        formData.append('id',{!! $ad->id !!})
                    axios.post('{{ route('advanteges.update') }}', formData).then(response => {
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
                            window.location.href = '{{ route('advanteges.index' )}}';
                        }
                    }).catch(response => {
                       console.log(response)
                    })
                }
            }
        });
    </script>
@endsection
