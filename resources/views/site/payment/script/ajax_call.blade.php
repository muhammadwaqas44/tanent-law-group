<script>

    $(document).ready(function () {

        $('.stipe_submit_btn').click(function () {

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


            Stripe.setPublishableKey('pk_test_84FgIUfAFz1iRp1NG8g9kMPD');

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
//                    $('.error').text('');
//                    $('.error').text(response.error.message);
//                    $('.error').css('display', 'inline-block');
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
                                {{--$('.step_alert').text(response.message);--}}
                                {{--$('.step_alert').css('display', 'inline-block');--}}
                                {{--$(".step_alert").fadeOut(2000, function () {--}}
                                    {{--window.location.href = '{{route('membership')}}';--}}
                                    {{--window.location.href = '{{route('homepage')}}';--}}
                                {{--});--}}
//                                alert(response.message);
                                successMsg(response.message);
                                window.location.href = '{{route('dashboard')}}';



                            }
                            else if (response.result == 'error') {
                                $.unblockUI();
//                                $('.error ').text(response.message);
//                                $('.error ').css('display', 'inline-block');
//                                $(".error ").fadeOut(5000);
                                errorMsg(response.message);


                            }
                        },
                        error: function (data,status) {
                            console.log(data);
                            console.log(data.responseJSON.errors)
                            if(status == 422) {
                                $.each(data.responseJSON.errors, function (key, value) {
                                    $.unblockUI();

                                    errorMsg(value);
                                    return false;
                                });
                            }
                            else{
                                $.unblockUI();
//                                console.log(data.responseJSON.message);
//                                $('.error ').text(data.responseJSON.message);
//                                $('.error ').css('display', 'inline-block');
//                                $(".error ").fadeOut(5000);
                                errorMsg(value);
                                return false;
                            }
                        }

                    });
                }
            }
        });


    });
</script>