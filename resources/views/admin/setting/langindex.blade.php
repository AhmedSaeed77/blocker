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
                <h4 class="content-title mb-0 my-auto">  الاعدادت </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">
                    </span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
        <div id='blogId'>
        <div>


            <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex justify-content-between">
                                <i class="mdi mdi-dots-horizontal text-gray"></i>
                            </div>
                            <p class="tx-12 tx-gray-500 mb-2">  <a href="">  ترجمة الكلمات الرئيسيه في الموقع  </a></p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table text-md-nowrap" id="type">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0"> id</th>
                                            <th class="wd-15p border-bottom-0"> المفتاح </th>
                                            <th class="wd-15p border-bottom-0"> الترجمة </th>
                                            <th class="wd-15p border-bottom-0">  تعديل </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                @foreach($lang_data as $count=>$language)
                                    <tr id="lang-{{$language['key']}}">
                                        <td>{{$count+1}}</td>
                                        <td>
                                            <input type="text" name="key[]" value="{{$language['key']}}" hidden>
                                            <label>{{$language['key']}}</label>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="value[]"
                                                   id="value-{{$count+1}}"
                                                   value="{{$language['value']}}">
                                        </td>
                                        <td style="width: 100px">
                                            <button type="button"
                                                    onclick="update_lang('{{$language['key']}}',$('#value-{{$count+1}}').val())"
                                                    class="btn btn-primary"> update
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            {{-- <div class="row">
                <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                    <!--div-->
                    <form id='newblog'>
                        <div class="card">
                            <div class="card-body">
                                <div class="main-content-label mg-b-5">
                                    معلومات الاتصال
                                </div>
                                <div class="row row-sm">
                                    <div class="col-lg-4">
                                        <label class="form-label">phone </label>
                                        <input required="" class="form-control" name="phone" type="number">
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="form-label">address</label>
                                        <input required="" class="form-control" name="address" type="text">
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="form-label">email </label>
                                        <input required="" class="form-control" name="email"  type="text">
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="form-label">instgram </label>
                                        <input required="" class="form-control" name="insts"  type="text">
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="form-label">facebook </label>
                                        <input required="" class="form-control" name="facebook"  type="text">
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="form-label">linkedin </label>
                                        <input required="" class="form-control" name="linkedin"  type="text">
                                    </div>
                                      <div class="col-lg-4">
                                        <label class="form-label">site </label>
                                        <input required="" class="form-control" name="site"  type="text">
                                    </div>
                                      <div class="col-lg-4">
                                        <label class="form-label">whatsapp </label>
                                        <input required="" class="form-control" name="whatsapp"  type="text">
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="form-label">logo </label>
                                        <input name='logo' multiple class="form-control" required="" type="file">
                                </div>
                                </div>
                            <button type="submit" @click="saveData" class="btn btn-primary mt-3 mb-0">حفظ</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div> --}}
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
    <script>
function update_lang(key, value) {

            data =  {
                    key: key,
                    value: value
                },
                // $('#loading').show();
            axios.post("{{route('translate_submit',[$lang])}}", data).then(response => {
                   $('#loading').hide();
                            swal({
                                title: 'تم الحفظ بنجاح',
                                type: 'success',
                                confirmButtonText: 'موافق',
                            });
                    }).catch(response => {
                        swal({
                            title: response.response.message,
                            type: 'warning',
                            confirmButtonText: 'موافق',
                        });
                    });
            };


</script>
@endsection
