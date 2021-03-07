<div class="col-sm-12 order-first order-lg-9 col-md-12 col-lg-9 col-xl-9 body_white1">
    <div class="row">
        @include('site.dashboard.letters.partial.form-selection')
        <form class="letter_1b_form" method="post" action="{{route('post_letter1b')}}">
            @csrf
            <input type="hidden" name="letter1b" class="letter1b_class">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                    <div class="prfl_inside3">
                        <div class="wrapping_div">
                            <div class="form-row">
                            <div class="form-group col-md-12">
                                <label class="label-font" for="inputEmail4">What is your landlord's first name? <img src="{{asset('site/img/profileedit.png')}}"></label>
                                <input type="text" class="form-control" placeholder="Landlord's First Name" name="landlord_first_name" onkeypress="return isCharacterKey(event)">
                            </div>
                            <div class="form-group col-md-12">
                                <label class="label-font" for="inputEmail4">What is your landlord's last name? <img src="{{asset('site/img/profileedit.png')}}"></label>
                                <input type="text" class="form-control" placeholder="Landlord's Last Name" name="landlord_last_name" onkeypress="return isCharacterKey(event)">
                            </div>
                            <div class="form-group col-md-12">
                                <label class="label-font" for="inputEmail4">What is your landlord's street address or PO Box ? <img src="{{asset('site/img/profileedit.png')}}"></label>
                                <input type="text" class="form-control" placeholder="Enter Street Address" name="street_address">
                            </div>
                            <div class="form-group col-md-12">
                                <label class="label-font" for="inputEmail4">What is your landlord's city? <img src="{{asset('site/img/profileedit.png')}}"></label>
                                <input type="text" class="form-control" placeholder="Enter City" name="city">
                            </div>
                            <div class="form-group col-md-12">
                                <label class="label-font" for="inputEmail4">What is your landlord's state? <img src="{{asset('site/img/profileedit.png')}}"></label>
                                <input type="text" class="form-control" placeholder="Enter State" name="state">
                            </div>
                            <div class="form-group col-md-12">
                                <label class="label-font" for="inputEmail4">What is your landlord's ZIP? <img src="{{asset('site/img/profileedit.png')}}"></label>
                                <input type="text" class="form-control" placeholder="Enter ZIP" name="zip">
                            </div>
                            <div class="form-group col-md-12">
                                <label class="label-font" for="inputEmail4">Landlord's email address (if available)? <img src="{{asset('site/img/profileedit.png')}}"></label>
                                <input type="email" class="form-control"  placeholder="Enter Landlord's Email" name="landlord_email">
                            </div>
                            <div class="form-group col-md-12">
                                <label class="label-font" for="inputEmail4">Full street address,city,state, and zip of the rental unit<img src="{{asset('site/img/profileedit.png')}}"></label>
                                <input type="text" class="form-control" placeholder="Enter Full Address" name="full_address">
                            </div>

                            <div class="form-group col-md-12">
                                <label class="label-font" for="inputEmail4">Did the conditions of your rental unit cause you to <img src="{{asset('site/img/profileedit.png')}}"><br>suffer bodily injury or physical sickness?</label>
                                    <select name="sickness_condition" class="form-control">
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                {{--<input type="text" class="form-control" placeholder="Type your condition" name="sickness_condition">--}}
                            </div>


                            <div class="form-group col-md-12">
                                <label class="label-font" for="inputEmail4">Select all that apply regarding the condition of the rental unit. <img src="{{asset('site/img/profileedit.png')}}"></label>
                            </div>

                            <div class="check_box">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input custom-control_box" id="customCheck" name="issues[heating_issue]">
                                    <label class="custom-control-label control-label_p" for="customCheck">Heating issues?</label>
                                </div>
                            </div>
                            <div class="check_box">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input custom-control_box" id="customCheck1" name="issues[electricity_issue]">
                                    <label class="custom-control-label control-label_p" for="customCheck1">Electricity/lighting issues?</label>
                                </div>
                            </div>
                            <div class="check_box">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input custom-control_box" id="customCheck2" name="issues[water_issue]">
                                    <label class="custom-control-label control-label_p" for="customCheck2">Hot/cold water issues?</label>
                                </div>
                            </div>
                            <div class="check_box">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input custom-control_box" id="customCheck3" name="issues[gas_issue]">
                                    <label class="custom-control-label control-label_p" for="customCheck3">Plumbing/gas issues?</label>
                                </div>
                            </div>
                            <div class="check_box">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input custom-control_box" id="customCheck4" name="issues[mold]">
                                    <label class="custom-control-label control-label_p" for="customCheck4">Mold?</label>
                                </div>
                            </div>
                            <div class="check_box">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input custom-control_box" id="customCheck5" name="issues[uncleanline]">
                                    <label class="custom-control-label control-label_p" for="customCheck5">General uncleanline?</label>
                                </div>
                            </div>
                            <div class="check_box">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input custom-control_box" id="customCheck6" name="issues[infestation]">
                                    <label class="custom-control-label control-label_p" for="customCheck6">Pest/rodent/insect infestation?</label>
                                </div>
                            </div>
                            <div class="check_box">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input custom-control_box" id="customCheck7" name="issues[trash]">
                                    <label class="custom-control-label control-label_p" for="customCheck7">Too few trash receptacles?</label>
                                </div>
                            </div>
                            <div class="check_box">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input custom-control_box" id="customCheck8" name="issues[stairways]">
                                    <label class="custom-control-label control-label_p" for="customCheck8">Floors,stairways,or railings in disrepair?</label>
                                </div>
                            </div>
                            <div class="check_box">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input custom-control_box" id="customCheck9" name="issues[bathroom]">
                                    <label class="custom-control-label control-label_p" for="customCheck9">No bathroom?</label>
                                </div>
                            </div>
                            <div class="check_box">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input custom-control_box" id="customCheck10" name="issues[kitchen]">
                                    <label class="custom-control-label control-label_p" for="customCheck10">No kitchen sink?</label>
                                </div>
                            </div>
                            <div class="check_box">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input custom-control_box" id="customCheck11" name="issues[sewer]">
                                        <label class="custom-control-label control-label_p" for="customCheck11">No connection to sewer?</label>
                                    </div>
                            </div>
                            <div class="check_box">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input custom-control_box" id="customCheck12" name="issues[deteriorating]">
                                    <label class="custom-control-label control-label_p" for="customCheck12">Deteriorating foundation?</label>
                                </div>
                            </div>
                            <div class="check_box">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input custom-control_box" id="customCheck13" name="issues[vents]">
                                    <label class="custom-control-label control-label_p" for="customCheck13">Vents not working properly?</label>
                                </div>
                            </div>
                            <div class="check_box">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input custom-control_box" id="customCheck14" name="issues[plaster]">
                                    <label class="custom-control-label control-label_p" for="customCheck14">Loose plaster?</label>
                                </div>
                            </div>
                            <div class="check_box">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input custom-control_box" id="customCheck15" name="issues[dilapidated]">
                                    <label class="custom-control-label control-label_p" for="customCheck15">Dilapidated exterior walls or roof coverings?</label>
                                </div>
                            </div>


                            <div class="check_box">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input custom-control_box" id="customCheck17" name="issues[other]" value="other">
                                    <label class="custom-control-label control-label_p" for="customCheck17">Lack of fire-extinguishing systems.</label>
                                </div>
                            </div>

                            <div class="check_box">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input custom-control_box" id="customCheck16" name="issues[other]" value="other">
                                    <label class="custom-control-label control-label_p" for="customCheck16">Other?</label>
                                </div>
                            </div>


                            <div class="form-group col-md-12 show-hide-other-div" style="display: none;">
                                <input type="text" name="issues[other][issue]" class="form-control" placeholder="Enter any other issues not mentioned above, with your rental unit.">
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="prfl_inside5">
                        <div class="wrapping_div">
                            <div class="form-row">
                        <div class="form-group col-md-12">
                            <label class="label-font" for="inputEmail4">What is your first name? <img src="{{asset('site/img/profileedit.png')}}"></label>
                            <input type="text" class="form-control" placeholder="Your First Name" name="first_name"  value="{{Auth::user()->first_name}}" onkeypress="return isCharacterKey(event)">
                        </div>
                        <div class="form-group col-md-12">
                            <label class="label-font" for="inputEmail4">What is your last name? <img src="{{asset('site/img/profileedit.png')}}"></label>
                            <input type="text" class="form-control"  placeholder="Your Last Name" name="last_name" value="{{Auth::user()->last_name}}" onkeypress="return isCharacterKey(event)">
                        </div>

                        <div class="form-group col-md-12">
                            <label class="label-font" for="inputEmail4">What is your total security deposit? <img src="{{asset('site/img/profileedit.png')}}"></label>
                            <input type="text" class="form-control"  placeholder="Enter Security Deposit" name="security_deposit" onkeypress="return isNumberKey(event)">
                        </div>
                        <div class="form-group col-md-12">
                            <label class="label-font" for="inputEmail4">What is your email address? <img src="{{asset('site/img/profileedit.png')}}"></label>
                            <input type="email" class="form-control"  placeholder="Enter Email" name="email" value="{{Auth::user()->email}}">
                        </div>
                        <div class="form-group col-md-12">
                            <label class="label-font" for="inputEmail4">What is your cell phone number? <img src="{{asset('site/img/profileedit.png')}}"></label>
                            <input type="text" class="form-control" placeholder="Enter Phone Number" name="phone_number" onkeypress="return isNumberKey(event)">
                        </div>

                        <div class="form-group col-md-12 input-icons">
                            <label class="label-font" for="inputEmail4">Your desired moved out date(if your health and/or<img src="{{asset('site/img/profileedit.png')}}"> wellbeing
                                are at risk, move out immediately; otherwise, select a date at least thirty days from today's date</label>
                            <input type="text" class="form-control date-picker" name="move_out_date" id="move_out_date">
                            <i class="far fa-calendar-alt icon"></i>
                        </div>


                        <div class="form-group col-md-12">
                            <label class="label-font" for="inputEmail4">An address where you can receive mail within twenty- <img src="{{asset('site/img/profileedit.png')}}"><br>
                                one days of the move out date (street, city, state, and zip)</label>
                            <input type="text" class="form-control date-picker" placeholder="Enter Address" name="address">
                        </div>
                    </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">

                        <div class="option-btn btn-group">

                            <button type="button" class="submit_btn_letter_1b btn-pd">
                                <img src="{{asset('site/img/icon-preview.png')}}" alt=""></button>
                            <button type="button" class="submit_btn_letter_1b btn-pd">
                                <img src="{{asset('site/img/icon-print.png')}}" alt=""></button>
                        </div>



                        {{--<div class="option-btn">--}}
                            {{--<button type="button" class="pdf_btn_letter_1b" style="border: none;">--}}
                                {{--<img src="{{asset('site/img/icon-preview.png')}}">--}}
                            {{--</button>--}}
                            {{--<button ><img src="{{asset('site/img/icon-download.png')}}"></button>--}}
                        {{--</div>--}}
                    </div>
                    {{--<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">--}}
                        {{--<div class="option-btn">--}}
                            {{--<button type="button" class="submit_btn_letter_1b" style="border: none;">--}}
                                {{--<img src="{{asset('site/img/icon-print.png')}}">--}}
                            {{--</button>--}}
                            {{--<button type="button" class="submit_btn_letter_1a">--}}
                                {{--<img src="{{asset('site/img/icon-download.png')}}">--}}
                            {{--</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">--}}
                        {{--<div class="option-btn">--}}
                            {{--<button style="border: none;">--}}
                                {{--<img src="{{asset('site/img/icon-download.png')}}">--}}
                            {{--</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </form>
    </div>

</div>
