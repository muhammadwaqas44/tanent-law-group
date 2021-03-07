@extends('site-layout.site-layout')

@section('title')
    Site Deposit Toolkit - Letter to Landlord Requesting Repairs
@endsection


@section('content')

    <div class="body_main-prfl">
        <div class="container">
            <div class="row row_dashboard">
                @include('site.dashboard.sidebar.sidebar')
                @include('site.dashboard.letters.partial.requesting-repairs-form')
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $( function() {
            $("#repair_last_date").datepicker({ dateFormat: 'dd/mm/yy' });


        });

        $(document).ready(function(){

            $('.pdf_btn_letter_request_repair').click(function (e) {
                e.preventDefault();
                var data = $('.requesting_repair_form').serialize();
                $.blockUI({
                    css: {
                        border: 'none',
                        padding: '15px',
                        backgroundColor: '#000',
                        '-webkit-border-radius': '10px',
                        '-moz-border-radius': '10px',
                        opacity: .5,
                        color: '#fff'
                    }
                });

                $.ajax({

                    type: 'POST',
                    url: '{{route("pdf_request_repairs")}}',
                    data: data,
                    success: function (response, status) {

                        if (response.result == 'success') {
                            $.unblockUI();
                            $('.requesting_repair_form_class').val(response.data);
                            successMsg(response.message);
                            console.log(response.url);
                            window.open(response.url,'_blank');
//                            window.location.href = response.url;
                        }
                        else if (response.result == 'error') {
                            $.unblockUI();
                            errorMsg(response.message);
//                            this_data.parents('div.modal-content').find('.error').text(response.message);
//                            this_data.parents('div.modal-content').find('.error').css('display','inline-block');
//                            this_data.parents('div.modal-content').find(".error").fadeOut(5000);
                        }
                    },
                    error: function (data) {
//                    var html = '';
                        $.each(data.responseJSON.errors, function (key, value) {
                            $.unblockUI();
                            errorMsg(value);
                            return false;
//                        console.log(this_data.parents('div.modal-content').find('.validation_error').append(html));


                        });

                    }

                });

            });

            $('.submit_btn_letter_request_repair').click(function (e) {
                e.preventDefault();
                var data = $('.requesting_repair_form').serialize();
                $.blockUI({
                    css: {
                        border: 'none',
                        padding: '15px',
                        backgroundColor: '#000',
                        '-webkit-border-radius': '10px',
                        '-moz-border-radius': '10px',
                        opacity: .5,
                        color: '#fff'
                    }
                });

                $.ajax({

                    type: 'POST',
                    url: '{{route("post_requesting_repair")}}',
                    data: data,
                    success: function (response, status) {

                        if (response.result == 'success') {
                            $.unblockUI();
                            successMsg(response.message);
                            window.location.href='{{route('getLetter')}}';
//                            console.log(this_data.find('.success'));
//                            this_data.parents('div.modal-content').find('.success').text(response.message);
//                            this_data.parents('div.modal-content').find('.success').css('display','inline-block');
//                            this_data.parents('div.modal-content').find(".success").fadeOut(4000,function(){
//                                window.location.reload('false');
//                            });

                        }
                        else if (response.result == 'error') {
                            $.unblockUI();
                            errorMsg(response.message);

                            //                            this_data.parents('div.modal-content').find('.error').text(response.message);
//                            this_data.parents('div.modal-content').find('.error').css('display','inline-block');
//                            this_data.parents('div.modal-content').find(".error").fadeOut(5000);
                        }
                    },
                    error: function (data) {
//                    var html = '';
                        $.each(data.responseJSON.errors, function (key, value) {
                            $.unblockUI();
                            errorMsg(value);
                            return false;
//                        console.log(this_data.parents('div.modal-content').find('.validation_error').append(html));


                        });

                    }

                });

            });

            $('#add_more').click(function(){

                if($('.repair_items_input').length < 10) {
                    var html = '<span class="input-icons"><input type="text" class="form-control repair_items_input" placeholder="Repair Items" name="repair_items[]">';
                    html += '<i class="fas fa-times icon cross-icon"></i>';
                    $('.repair_items').append(html);
                }
                else if($('.repair_items_input') ==  10)
                {
                    $('#add_more').hide();
                }


            });

            $(document).on('click','.cross-icon',function () {
                $(this).parent().remove();
            });


        });
    </script>
@endsection
