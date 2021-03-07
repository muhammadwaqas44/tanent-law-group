<div class="col-sm-12 order-first order-lg-9 col-md-12 col-lg-9 col-xl-9 body_white1">
    <div class="row">
        @include('site.dashboard.letters.partial.form-selection')
        <form class="judgement_letter_form" method="post" action="{{route('post_judgement_letter')}}">
            @csrf
            <input type="hidden" name="judgement_letter" class="judgement_letter_form_class">
            <div class="row">
                <div class="col-sm-11 col-md-11 col-lg-11 col-xl-11 ">
                    <div class="prfl_inside3">
                        <div class="wrapping_div">
                            <div class="form-row">
                                <div class="form-group col-md-12 ">
                                    <label class="label-font" for="inputEmail4">What is your landlord's first name? <img
                                            src="{{asset('site/img/profileedit.png')}}"></label>
                                    <input type="text" class="form-control" placeholder="Landlord's First Name"
                                           name="landlord_first_name" onkeypress="return isCharacterKey(event)">
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="label-font" for="inputEmail4">What is your landlord's last name? <img
                                            src="{{asset('site/img/profileedit.png')}}"></label>
                                    <input type="text" class="form-control" placeholder="Landlord's Last Name"
                                           name="landlord_last_name" onkeypress="return isCharacterKey(event)">
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="label-font" for="inputEmail4">What is your landlord's street address
                                        or PO Box ? <img src="{{asset('site/img/profileedit.png')}}"></label>
                                    <input type="text" class="form-control" placeholder="Enter Street Address"
                                           name="street_address">
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="label-font" for="inputEmail4">What is your landlord's country? <img
                                            src="{{asset('site/img/profileedit.png')}}"></label>
                                    <input type="text" class="form-control" placeholder="Enter Country" name="country">
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="label-font" for="inputEmail4">What is your landlord's city? <img
                                            src="{{asset('site/img/profileedit.png')}}"></label>
                                    <input type="text" class="form-control" placeholder="Enter City" name="city">
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="label-font" for="inputEmail4">What is your landlord's state? <img
                                            src="{{asset('site/img/profileedit.png')}}"></label>
                                    <input type="text" class="form-control" placeholder="Enter State" name="state">
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="label-font" for="inputEmail4">What is your landlord's ZIP? <img
                                            src="{{asset('site/img/profileedit.png')}}"></label>
                                    <input type="text" class="form-control" placeholder="Enter ZIP" name="zip">
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="label-font" for="inputEmail4">Landlord's email address (if available)?
                                        <img src="{{asset('site/img/profileedit.png')}}"></label>
                                    <input type="email" class="form-control" placeholder="Enter Landlord's Email"
                                           name="landlord_email">
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="label-font" for="inputEmail4">Full street address,city,state, and zip
                                        of the rental unit<img src="{{asset('site/img/profileedit.png')}}"></label>
                                    <input type="text" class="form-control" placeholder="Enter Full Address"
                                           name="full_address">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-11 col-md-11 col-lg-11 col-xl-11">
                    <div class="prfl_inside5">
                        <div class="wrapping_div">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="label-font" for="inputEmail4">What is your first name? <img
                                            src="{{asset('site/img/profileedit.png')}}"></label>
                                    <input type="text" class="form-control" placeholder="Your First Name"
                                           name="first_name" value="{{Auth::user()->first_name}}"
                                           onkeypress="return isCharacterKey(event)">
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="label-font" for="inputEmail4">What is your last name? <img
                                            src="{{asset('site/img/profileedit.png')}}"></label>
                                    <input type="text" class="form-control" placeholder="Your Last Name"
                                           name="last_name" value="{{Auth::user()->last_name}}"
                                           onkeypress="return isCharacterKey(event)">
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="label-font" for="inputEmail4">Enter your check amount? <img
                                            src="{{asset('site/img/profileedit.png')}}"></label>
                                    <input type="text" class="form-control" placeholder="Enter your check amount"
                                           name="check_amount" onkeypress="return isNumberKey(event)">
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="label-font" for="inputEmail4">What is your email address? <img
                                            src="{{asset('site/img/profileedit.png')}}"></label>
                                    <input type="email" class="form-control" placeholder="Enter Email" name="email"
                                           value="{{Auth::user()->email}}">
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="label-font" for="inputEmail4">What is your cell phone number? <img
                                            src="{{asset('site/img/profileedit.png')}}"></label>
                                    <input type="text" class="form-control" placeholder="Enter Phone Number"
                                           name="phone_number" onkeypress="return isNumberKey(event)">
                                </div>

                                <div class="form-group col-md-12">
                                    <label class="label-font" for="inputEmail4">County Superior Court Case No? <img
                                            src="{{asset('site/img/profileedit.png')}}"></label>
                                    <input type="text" class="form-control" placeholder="Enter Case Number" name="case_number">
                                </div>

                                <div class="form-group col-md-12 input-icons">
                                    <label class="label-font" for="inputEmail4">A date (at least
                                        two weeks from today's date) <img src="{{asset('site/img/profileedit.png')}}"></label>
                                    <input type="text" class="form-control date-picker"
                                           placeholder="Enter date" name="amount_send_date"
                                           id="amount_send_date">
                                    <i class="far fa-calendar-alt icon"></i>

                                </div>

                                <div class="form-group col-md-12">
                                    <label class="label-font" for="inputEmail4">An address where you can receive mail
                                        within two <br>week<img src="{{asset('site/img/profileedit.png')}}">
                                        </label>
                                    <input type="text" class="form-control date-picker" placeholder="Enter Address"
                                           name="address">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-margin">
                    <div class="col-sm-12 col-md-offset-3 col-lg-1 col-xl-1"></div>
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <div class="option-btn btn-group">
                            <button type="button" class="pdf_btn_judgement_letter btn-pd">
                                <img src="{{asset('site/img/icon-preview.png')}}" alt=""></button>
                            <button type="button" class="submit_btn_judgement_letter btn-pd">
                                <img src="{{asset('site/img/icon-print.png')}}" alt=""></button>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4"></div>


                </div>

            </div>


        </form>
    </div>

</div>
