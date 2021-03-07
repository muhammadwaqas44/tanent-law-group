<div class="modal fade" id="subscrtionPopup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content modal-content2">

            <!-- Modal Header -->
            <div class="modal-header modal-header2">
                <h4 class="modal-title">Subscribe</h4>
               <button type="button" class="close" data-dismiss="modal">×</button>
            </div>




{{--            <script type="text/javascript" src="//sgwidget.leaderapps.co/js/sendgrid-widget.js"></script>--}}
{{--            <div id="sendgrid-subscription-widget" class="sendgrid-subscription-widget m-0" >--}}
{{--                <form class="action_pa" id="sg-widget" data-token="e2c37163dc95b4351b82ab699ae28b29" onsubmit="return false;">--}}
{{--                    <div class="sg-response" id="sg-response"></div>--}}
{{--                    <input id="email" class="form-control mb-3" type="email" name="email" placeholder="you@example.com" required>--}}
{{--                    <input type="submit" id="sg-submit-btn" class="b_yes"  value="Subscribe">--}}
{{--                </form>--}}
{{--                <form class="loginForm action_pa">--}}
{{--                    <input type="hidden" name="_token" value="tiEx0jGlSxvfC8VLQ1IALjYDGW33brzXSJOXx7Fy">                <div class="form-group">--}}
{{--                        <label for="pwd">Email Address</label>--}}
{{--                        <input type="email" class="form-control" placeholder="Enter Email Address" name="email" required="">--}}
{{--                    </div>--}}


{{--                    <div class="row mt-4">--}}
{{--                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 b_yes1">--}}
{{--                            <button type="button" class="b_yes loginBtn" style="padding: 5px 0px;">--}}
{{--                                <h4>Subscribe</h4>--}}
{{--                            </button>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </form>--}}


{{--                --}}
{{--                --}}
{{--                --}}
{{--            </div>--}}

            <script type="text/javascript" src="//app.sgwidget.com/js/sg-widget-v2.js">

            </script>
{{--            <style>.sendgrid-subscription-widget input { padding: .5em .5em .55em; font-size: .8em; font-family: sans-serif } .sendgrid-subscription-widget .sg_signup_first_name, .sendgrid-subscription-widget .sg_signup_last_name { margin-right: .5em } .sendgrid-subscription-widget .sg-submit-btn { display: inline-block; color: #444; border: 1px solid #ccc; background: #ddd; box-shadow: 0 0 5px -1px rgba(0, 0, 0, .2); cursor: pointer; vertical-align: middle; max-width: 100px; padding: .5em; margin: 0 .4em; text-align: center; font-size: .9em; font-family: sans-serif } .sendgrid-subscription-widget .sg-submit-btn:active { color: #8e8b8b; box-shadow: 0 0 5px -1px rgba(0, 0, 0, .6) } .sendgrid-subscription-widget .response { display: none; font-family: sans-serif; font-size: .8em } .sendgrid-subscription-widget .success { color: green } .sendgrid-subscription-widget .error, .sendgrid-subscription-widget .sg-consent-text a { color: #3097d1 } .sendgrid-subscription-widget .sg-consent-text { font-size: .9em } .sendgrid-subscription-widget .sg-consent-text label { font-weight: 400 } .sendgrid-subscription-widget .required { outline: 1px solid #f00; } .sendgrid-subscription-widget .sg_custom { margin-left: 5px; } .sendgrid-subscription-widget .checkbox_label { padding-left: 3px; } </style>--}}
            <div style="margin: 0px;padding: 0px;" class="sendgrid-subscription-widget widget-1040" data-emailerror="Please enter a valid email address" data-nameerror="Please enter your name" data-checkboxerror="Please tick the box to accept our conditions">
{{--                <form class="sg-widget" data-token="729c4e75ab0515fcda9ebaebb28c2143" onsubmit="return false;">--}}
{{--                    <div class="sg-response"></div>--}}
{{--                    <input class="sg_signup_first_name" type="text" name="sg_signup_first_name" placeholder="First Name" required="required">--}}
{{--                    <input class="sg_signup_last_name" type="text" name="sg_signup_last_name" placeholder="Last Name" required="required">--}}
{{--                    <input class="sg_email" type="email" name="sg_email" placeholder="you@example.com" required="required">--}}
{{--                    <input type="submit" class="sg-submit-btn" id="widget-1040" value="Subscribe">--}}
{{--                </form>--}}
                <form class="action_pa sg-widget" data-token="729c4e75ab0515fcda9ebaebb28c2143" onsubmit="return false;">
                    <div class="sg-response success alert-success" style="text-align: center"></div>
                    <div class="form-group">
                        <label for="pwd">First Name</label>
                        <input type="email" class="form-control sg_signup_first_name" name="sg_signup_first_name" placeholder="Enter First Name" required="">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Last Name</label>
                        <input type="text" class="form-control sg_signup_last_name" placeholder="Enter Last Name" name="sg_signup_last_name" required="">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Email</label>
                        <input type="email" class="form-control sg_email" placeholder="Enter Email" name="sg_email" required="">
                    </div>


                    <div class="row mt-4">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 b_yes1">
                            <button type="submit" class="b_yes sg-submit-btn" id="widget-1040">
                                <h4>Subscribe</h4>
                            </button>
                        </div>

                    </div>
                </form>
            </div>



        </div>
    </div>
</div>


<script>

    $("body").on('DOMSubtreeModified', ".sg-response", function() {
        if($('.sg-response').text() == 'Thanks for subscribing.')
        {
            @if(Request::route()->getName() == 'landingPage1')
                location.href="{{asset('site/files/MySecurityDeposit.com-free-download1.zip')}}";
            @else
                location.href="{{asset('site/files/MySecurityDeposit.com-free-download2.zip')}}";
            @endif

            $('#subscrtionPopup').modal('hide');

            $('.action_pa')[0].reset();
        }
    });

</script>

