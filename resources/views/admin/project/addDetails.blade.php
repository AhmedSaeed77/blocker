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
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto"> اضافة مشروع</h4> <span
                    class="text-muted mt-1 tx-13 mr-2 mb-0"></span>
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
            <form id='addpro'>
                @csrf
                <div class="row">
                    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                        <!--div-->
                        <div class="card">
                            <div class="card-body">
                                <div class="main-content-label mg-b-5">
                                    تفاصيل المشروع
                                </div>
                                <div class="row m-3">
                                    <div class="col-8">
                                        برجاء اختيار المشروع المطلوب التغيير فيه
                                        <select name='pro_id' v-model='pro_id' class="form-control">

                                            @foreach (App\Models\Project::all() as $t)
                                                <option value="{{ $t->id }}">{{ $t->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="row row-sm">
                                    <div class="col-lg-4 mt-2">
                                        <p class="mg-b-10"> المطور </p><select name='dev_id' v-model='dev_id'
                                            class="form-control">

                                            @foreach (App\Models\Developer::all() as $t)
                                                <option value="{{ $t->id }}">{{ $t->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-4 mt-2">
                                        <p class="mg-b-10"> النوع </p><select name='type_id' v-model='type_id'
                                            class="form-control ">
                                            @foreach (App\Models\Type::all() as $t)
                                                <option value="{{ $t->id }}">{{ evaluate($t)['type'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-4 mt-2">
                                        <p class="mg-b-10"> حالة المشروع </p><select name="status_id" v-model='status_id'
                                            class="form-control ">
                                            @foreach (App\Models\status::all() as $t)
                                                <option value="{{ $t->id }}">{{ $t->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg mt-2 mg-t-10 mg-lg-t-0">
                                        <label class="form-label">الغرف</label>
                                        <input required="" class="form-control" name="rooms" v-model='rooms'
                                            placeholder="...." type="number">
                                    </div>
                                    <div class="col-lg mt-2 mg-t-10 mg-lg-t-0">
                                        <label class="form-label">غرف النوم</label>
                                        <input required="" class="form-control" name="bedrooms" v-model='bedrooms'
                                            placeholder="...." type="number">
                                    </div>
                                    <div class="col-lg mt-2 mg-t-10 mg-lg-t-0">
                                        <label class="form-label">الحمامات</label>
                                        <input required="" class="form-control" name="bath" v-model='bath'
                                            placeholder="...." type="text">
                                    </div>
                                    <div class="col-lg mt-2 mg-t-10 mg-lg-t-0">
                                        <label class="form-label">الكراجات</label>
                                        <input required="" class="form-control" name="garage" v-model='garage'
                                            placeholder="...." type="text">
                                    </div>

                                </div>
                                <div class="main-content-label mg-b-5 mt-3">
                                    مميزات المشروع
                                </div>
                                <div class="row mt-3">
                                    @foreach (App\Models\Amenitie::all() as $t)
                                        <div class="col-lg-3">
                                            <label class="ckbox"><input name='amenitie[]' multiple
                                                    value="{{ $t->id }}" type="checkbox"><span>
                                                    {{ $t->name_ar }} </span></label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    
                        <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">    
                        <button type="submit" @click="saveData" class="btn btn-primary mt-3 mb-5"> حفظ</button>
                    </div>
                </div>

            </form>


            <iframe :src='link' width="100%" height="450" style="border:0;" allowfullscreen=""
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </div>
    <!-- row closed -->
@endsection

@section('js')
    <!--Internal  Select2 js -->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!-- Internal Jquery.steps js -->
    <script src="{{ URL::asset('assets/plugins/jquery-steps/jquery.steps.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/parsleyjs/parsley.min.js') }}"></script>
    <!--Internal  Form-wizard js -->
    <script src="{{ URL::asset('assets/js/form-wizard.js') }}"></script>
    <!--Internal  Form-elements js-->
    <script src="{{ URL::asset('assets/js/advanced-form-elements.js') }}"></script>
    <script src="{{ URL::asset('assets/js/select2.js') }}"></script>
    <!--Internal Sumoselect js-->
    <script src="{{ URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js') }}"></script>
    @include('vue')
    <script>
        content = new Vue({
            'el': '#projectbuild',
            data: {
                name: '',
                name_ar: '',
                name_fr: '',
                status_id: '',
                description: '',
                description_ar: '',
                description_fr: '',
                code: '',
                price: '',
                Pay_Plan: '',
                region_id: '',
                area_id: '',
                area_id: '',
                dev_id: '',
                type_id: '',
                rooms: '',
                bedrooms: '',
                bath: '',
                garage: '',
                areas: [],
                fram: '',
                link: '',
                Count: 0
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
                getArea: function() {
                    url = '{{ route('area.getarea', ':id') }}',
                        url = url.replace(':id', this.region_id)
                    axios.get(url).then(response => {
                        this.areas = response.data.areas
                    }).catch(response => {
                        swal({
                            title: 'هناك خطأ ما',
                            type: 'warning',
                            confirmButtonText: 'موافق',
                        });
                    })
                },
                saveData: function(e) {
                    e.preventDefault();
                    this.error = []
                    this.validation(this.garage, '    عنوان المشروع مطلوب   ');
                    this.validation(this.bath, '    عنوان المشروع مطلوب   ');
                    this.validation(this.bedrooms, '    عنوان المشروع مطلوب   ');
                    this.validation(this.rooms, '    عنوان المشروع مطلوب   ');
                    this.validation(this.status_id, '    حالة المشروع       ');
                    this.validation(this.dev_id, '    مطور المشروع     ');
                    this.validation(this.area_id, '    عنوان المشروع مطلوب   ');
                    this.validation(this.region_id, '    عنوان المشروع مطلوب   ');
                    this.validation(this.Count, '   خطة الدفع مطلوبه     ');
                    this.validation(this.price, '  سعر المشروع مطلوب   ');
                    this.validation(this.code, '   كود المشروع مطلوب   ');
                    ///
                    this.validation(this.description_fr, '     الوصف باللغه الفرنسيه مطلوب  ');
                    this.validation(this.description_ar, '     الوصف باللغه العربيه مطلوب  ');
                    this.validation(this.description, '     الوصف باللغه الانجليزيه مطلوب  ');
                    //////////////
                    this.validation(this.name_ar, '  الاسم باللغه العربيه مطلوب    ');
                    this.validation(this.name_fr, '  الاسم باللغه الفرنسيه مطلوب    ');
                    this.validation(this.name, '  الاسم باللغه الانجليزيه مطلوب    ');
                    if (this.error.length !== 0) {
                        return false
                    }
                    let formData = new FormData(document.getElementById('addpro'));
                    this.load = true;
                    axios.post('{{ route('projects.detailsStore') }}', formData).then(response => {
                        console.log(response)
                        if (response.data.err == true) {
                            swal({
                                title: response.data.msg,
                                type: 'warning',
                                confirmButtonText: 'موافق',
                            });
                        } else {
                            swal({
                                title: 'تم الحفظ بنجاح',
                                type: 'success',
                                confirmButtonText: 'موافق',
                            });
                        }
                    }).catch(response => {
                        console.log(response);
                    })
                },
                convert: function() {
                    var mylocation = this.fram
                    var myArray = mylocation.split(" ");
                    fram = myArray[1].split('"');
                    this.fram = fram[1]
                    this.link = fram[1]
                }
            }
        });
    </script>
@endsection
