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
                <h4 class="content-title mb-0 my-auto"> تعديل حي </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/

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

								<div class="main-content-label mg-b-5">  تعديل حي
								</div>

								<div class="row row-sm mg-b-20">
                                <div class="col-lg-4">
                                
                                        <label class="form-label"> اسم الحى باللغه العربيه </label>
                                        <input  required="" class="form-control" name="area_ar" value="{{ evaluateSp($area,'ar')['area'] }}"  type="text">
                                </div>
                                <div class="col-lg-4">
                                        <label class="form-label"> اسم الحى باللغه الانجليزيه</label>
                                        <input  required="" class="form-control" name="area" value="{{ $area->area }}"  type="text">
                                </div>
                                <div class="col-lg-4">
                                        <label class="form-label"> اسم الحى باللغه الفرنسيه</label>
                                        <input  required="" class="form-control" name="area_fr" value="{{ evaluateSp($area,'fr')['area'] }}"  type="text">
                                </div>
									

								</div>
                                <div class="col-lg-12 mg-t-20 mg-lg-t-0">
										<p class="mg-b-10">  المكان التابع </p>
                                        <select class="form-control select"  name='region_id' >
                                            @foreach(App\Models\Location::all() as $region)
                                                <option  @if($region->id == $area->region_id) selected @endif
                                                    value="{{$region->id}}">{{$region->location}}</option>
											@endforeach
										</select>
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
                        formData.append('id',{!! $area->id !!})
                    axios.post('{{ route('area.update') }}', formData).then(response => {
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
                            window.location.href = '{{ route('area.index' )}}';
                        }
                    }).catch(response => {
                       console.log(response)
                    })
                }
            }
        });
    </script>
@endsection
