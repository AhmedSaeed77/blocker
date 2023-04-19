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
                <h4 class="content-title mb-0 my-auto">Forms</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    Form-wizards</span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            <div class="pr-1 mb-3 mb-xl-0">
                <button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
            </div>
            <div class="pr-1 mb-3 mb-xl-0">
                <button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
            </div>
            <div class="pr-1 mb-3 mb-xl-0">
                <button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
            </div>
            <div class="mb-3 mb-xl-0">
                <div class="btn-group dropdown">
                    <button type="button" class="btn btn-primary">14 Aug 2019</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                        id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate"
                        data-x-placement="bottom-end">
                        <a class="dropdown-item" href="#">2015</a>
                        <a class="dropdown-item" href="#">2016</a>
                        <a class="dropdown-item" href="#">2017</a>
                        <a class="dropdown-item" href="#">2018</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')


   <div class="my-properties">
                            <table class="table-responsive" id='projects'>
                                <thead>
                                    <tr>
                                        <th class="pl-2"> id </th>
                                        <th class="pl-2"> key </th>
                                        <th class="p-0"> value </th>
                                        <th>  </th>

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
                            {{-- <div class="pagination-container">
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item"><a class="btn btn-common" href="#"><i class="lni-chevron-left"></i> Previous </a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="btn btn-common" href="#">Next <i class="lni-chevron-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div> --}}
                        </div>


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
    <!--Internal Fancy uploader js-->
    <script src="{{URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>
    <!--Internal  Form-elements js-->
    <script src="{{URL::asset('assets/js/advanced-form-elements.js')}}"></script>
    <script src="{{URL::asset('assets/js/select2.js')}}"></script>
    <!--Internal Sumoselect js-->
    <script src="{{URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script>
    @include('vue')
    {{-- <script>
    content = new Vue({
                'el': '#projectbuild',
                data : {
                    ar : false,
                    en : true,
                    fr : false,
                    load: false,
                    Count : 0
                },
                methods:{
                    validation:function(){

                    },
                    saveData:function(e){
                        e.preventDefault();

                        let formData = new FormData(document.getElementById('addpro'));
                        this.load = true;
                        axios.post('{{ route('projects.store')}}', formData).then(response => {
                            console.log(response)
                            if(response.data.err == true){
                                swal({
                                    title:  response.msg,
                                    type: 'warning',
                                    confirmButtonText: 'موافق',
                                });
                            }else{
                            swal({
                                    title:  response.msg,
                                    type: 'success',
                                    confirmButtonText: 'موافق',
                                });
                                this.load = false;
                            }
                        }).catch(response => {
                            swal({
                                title:  response.response.message,
                                type: 'warning',
                                confirmButtonText: 'موافق',
                                });
                        })
                    }
                }
    });

    </script> --}}
{{--
    <script type="text/javascript">

           $(function() {
            var table = $('#projects').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url:"{{ route('projects.index') }}",
                    data: function (d) {

                        }
                    },
                columns: [
                    // {data: 'DT_RowIndex', name: 'DT_RowIndex'},

                    {
                        data: 'id',
                        name: 'id',
                        searchable: true
                    },

                    {
                        data: 'name',
                        name: 'name',
                        searchable: true

                    },
                    {
                        data: 'price',
                        name: 'price',
                        searchable: true

                    },
                    {
                        data: 'pay_plan',
                        name: 'pay_plan',
                        searchable: true

                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    }
                ]
            })
            });
    </script> --}}
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
                                title: 'sdsdd',
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
