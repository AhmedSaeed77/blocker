{{-- <script src="{{ url('assets/vue.js') }}"></script> --}}
<script src="{{ url('assets/vuedev.js') }}"></script>
<script src="{{ url('assets/axiox.js') }}"></script>
<script src="{{ URL::asset('js/sweetalert2@11.js') }}"></script>
<script src="{{ URL::asset('js/sweetalert2.all.js') }}"></script>



<script>

function adawe(route ,data){
    axios.post(route, data).then(response => {
                    if(response.status !== 200){
                        console.log(response)
                    }else{
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
                            return response.data.err;
                        }
                    }
                }).catch(reject => {
                   var response = $.parseJSON(reject.responseText);
                        $.each(response.errors, function(name, msg) {
                            swal({
                                title: msg[0],
                                type: 'warning',
                                confirmButtonText: 'ok',
                            });
                            return 0
                        });
                })
}
</script>
