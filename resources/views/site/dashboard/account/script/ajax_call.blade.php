<script>

    $(document).ready(function () {

        $('.stipe_submit_btn').click(function () {

            var flag = 0 ;

            if($('#checkbox_security').is(":checked"))
            {
                $('.error').hide();
                flag = 0;
            }
            else{
                // $('.error').text('Please accept the purchasing policy ');
                // $('.error').css('display','inline-block');
                //
                // scrollToResponse('error_id');

                errorMsg('Please accept the purchasing policy');

                flag ++;
            }

            if(flag != 0)
            {
                return false;
            }

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


            Stripe.setPublishableKey('{{env("STRIPE_SECRET")}}');

            Stripe.card.createToken({
                number: $('#card_number').val(),
                cvc: $('#cvc').val(),
                exp_month: $('#exp_month').val(),
                exp_year: $('#exp_year').val(),
                name: $('#full_name').val()
            }, stripeResponseHandler);

            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $.unblockUI();
                    // $('.error').text('');
                    // $('.error').text(response.error.message);
                    // $('.error').css('display', 'inline-block');

                    errorMsg(response.error.message);

                    return false;
                }
                else {
                    var token = response.id;

                    var data = $('#payment_form').serializeArray();

                    data.push({name: "stripeToken", value: token});


                    $.ajax({
                        type: 'POST',
                        url: '{{route('make_payment')}}',
                        data: data,

                        success: function (response, status) {

                            if (response.result == 'success') {
                                $.unblockUI();
                                {{--$('.success').text(response.message);--}}
                                {{--$('.success').css('display', 'inline-block');--}}
                                {{--$(".success").fadeOut(2000, function () {--}}
                                {{--    --}}{{--window.location.href = '{{route('membership')}}';--}}
                                {{--    --}}{{--window.location.href = '{{route('homepage')}}';--}}
                                {{--        window.location.href = '{{route('dashboard')}}';--}}

                                {{--});--}}

                                successMsg(response.message);
                                setTimeout(function(){

                                    window.location.href = '{{route('dashboard')}}';
                                    },
                                    2000);

//                                alert(response.message);

                            }
                            else if (response.result == 'error') {
                                $.unblockUI();
                                // $('.error').text(response.message);
                                // $('.error').css('display', 'inline-block');
                                // $(".error").fadeOut(8000);

                                errorMsg(response.message);


                            }
                        },
                        error: function (data,status) {

                            if(status == 422) {
                                $.each(data.responseJSON.errors, function (key, value) {
                                    $.unblockUI();
                                    // $('.error').text(value);
                                    // $('.error').css('display', 'inline-block');
                                    // $(".error").fadeOut(8000);
                                    errorMsg(value);
                                    return false;
                                });
                            }
                            else{
                                $.unblockUI();
//                                console.log(data.responseJSON.message);
//                                 $('.error').text(data.responseJSON.message);
//                                 $('.error').css('display', 'inline-block');
//                                 $('.error').fadeOut(8000);
                                errorMsg(data.responseJSON.message);
                                return false;
                            }
                        }

                    });
                }
            }
        });


    });
</script>
