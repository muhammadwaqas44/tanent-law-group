<div class="col-sm-12 order-first order-lg-9 col-md-12 col-lg-9 col-xl-9 body_white1">
    <div class="row">
        @include('site.dashboard.letters.partial.form-selection')
        <form class="letter_2_form" method="post" action="{{route('post_letter2')}}">
            @csrf
            <input type="hidden" name="letter2" class="letter2_class">
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
                                <label class="label-font" for="inputEmail4">Full street address,city,state, and zip of the rental unit <img src="{{asset('site/img/profileedit.png')}}"></label>
                                <input type="text" class="form-control" placeholder="Enter Full Address" name="full_address">
                            </div>


                        </div>
                        </div>
                    </div>
                </div>

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
                                <label class="label-font" for="inputEmail4">What is your email address? <img src="{{asset('site/img/profileedit.png')}}"></label>
                                <input type="email" class="form-control"  placeholder="Enter Email" name="email" value="{{Auth::user()->email}}">
                            </div>
                            <div class="form-group col-md-12">
                                <label class="label-font" for="inputEmail4">What is your cell phone number? <img src="{{asset('site/img/profileedit.png')}}"></label>
                                <input type="text" class="form-control" placeholder="Enter Phone Number" name="phone_number" onkeypress="return isNumberKey(event)">
                            </div>

                            <div class="form-group col-md-12 input-icons">
                                <label class="label-font" for="inputEmail4">By what date did you inform your Landlord you would<img src="{{asset('site/img/profileedit.png')}}"> be moving out of your rental unit?</label>
                                <input type="text" class="form-control date-picker"  placeholder="DD/MM/YYYY" name="rental_unit_move_date" id="rental_unit_move_date">
                                <i class="far fa-calendar-alt icon"></i>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="label-font" for="inputEmail4">What was your total security deposit? <img src="{{asset('site/img/profileedit.png')}}"></label>
                                <input type="text" class="form-control"  placeholder="Enter Security Deposit" name="security_deposit" onkeypress="return isNumberKey(event)">
                            </div>

                            <div class="form-group col-md-12">
                                <label class="label-font" for="inputEmail4">Amount of your security deposit landlord has wrongfully withheld? <img src="{{asset('site/img/profileedit.png')}}"></label>
                                <input type="text" class="form-control"  placeholder="Enter Security Deposit Landlord Hold" name="hold_security_deposit" onkeypress="return isNumberKey(event)">
                            </div>

                            <div class="form-group col-md-12">
                                <label class="label-font" for="inputEmail4">The cost of Security Deposit Toolkit? <img src="{{asset('site/img/profileedit.png')}}"></label>
                                <input type="text" class="form-control"  placeholder="Enter Amount" name="toolkit_amount" value="{{Auth::user()->payment->price}}" onkeypress="return isNumberKey(event)">
                            </div>

                            <div class="form-group col-md-12 input-icons">
                                <label class="label-font" for="inputEmail4">What will the date be one week after you send this<img src="{{asset('/site/img/profileedit.png')}}"><br> letter?</label>
                                <input type="text" class="form-control date-picker" placeholder="DD/MM/YYYY" name="letter_send_date" id="letter_send_date">
                                <i class="far fa-calendar-alt icon"></i>

                            </div>

                            <div class="form-group col-md-12">
                                <label class="label-font" for="inputEmail4">At what address will you receive mail within twenty-<img src="{{asset('/site/img/profileedit.png')}}">one days of the move out date?</label>
                                <input type="text" class="form-control date-picker" placeholder="Enter Address" name="address">
                            </div>


                            <div class="form-group col-md-12 radio-btn">
                                <label class="label-font" for="inputEmail4">Did you ask the landlord to conduct an initial inspect-<img src="{{asset('/site/img/profileedit.png')}}">ion of the rental unit before you moved out? (If yes, <br>add "As you know, I requested an initial inspection of<br> the property before moving out
                                    so that I would have an <br>opportunity to remedy any alleged  issues and recover my security deposit in full." if no, omit.)</label>
                                <div>
                                    <input id="radio-1" class="radio-custom radio-active" name="initial_inspection" type="radio" value="yes" checked>
                                    <label for="radio-1" class="radio-custom-label radio-active">Yes</label>
                                </div>
                                <div>
                                    <input id="radio-2" class="radio-custom" name="initial_inspection" type="radio" value="no">
                                    <label for="radio-2" class="radio-custom-label">No</label>
                                </div>
                            </div>
                            <!-- Radio Group End -->

                            <div class="form-group col-md-12 radio-btn">
                                <label class="label-font" for="inputEmail4">Did you return the rental unit to the Landlord broom- <img src="{{asset('/site/img/profileedit.png')}}">clean and in exactly the same condition as when you moved in less ordinary wear and tear?</label>
                                <div>
                                    <input id="radio-1" class="radio-custom radio-active" name="broom_clean" type="radio" value="yes" checked>
                                    <label for="radio-1" class="radio-custom-label radio-active">Yes</label>
                                </div>
                                <div>
                                    <input id="radio-2" class="radio-custom" name="broom_clean" type="radio" value="no">
                                    <label for="radio-2" class="radio-custom-label">No</label>
                                </div>
                            </div>

                            <!-- Radio Group -->
                            <div class="form-group col-md-12 radio-btn">
                                <label class="label-font" for="inputEmail4">Did you return the keys on or about the move out <img src="{{asset('/site/img/profileedit.png')}}">date? (if yes, add "I returned the keys to you on <br>or about the date I moved out."; if no, omit.)</label>
                                <div>
                                    <input id="radio-3" class="radio-custom radio-active" name="key_return" type="radio"  value="yes" checked>
                                    <label for="radio-3" class="radio-custom-label radio-active">Yes</label>
                                </div>
                                <div>
                                    <input id="radio-4" class="radio-custom" name="key_return" type="radio" value="no">
                                    <label for="radio-4" class="radio-custom-label">No</label>
                                </div>
                            </div>
                            <!-- Radio Group End -->
                            <!-- Radio Group -->
                            <div class="form-group col-md-12 radio-btn">
                                <label class="label-font" for="inputEmail4">Did you provide your landlord with an address to<img src="{{asset('/site/img/profileedit.png')}}"><br>
                                    which to send your security deposit? (If yes, add <br>"And I provided you with an address for the return <br>of my security deposit and reminded you to return<br> it to me within twenty-one</label>
                                <div>
                                    <input id="radio-5" class="radio-custom radio-active" name="landlord_provide_address" value="yes" type="radio" checked>
                                    <label for="radio-5" class="radio-custom-label radio-active">Yes</label>
                                </div>
                                <div>
                                    <input id="radio-6" class="radio-custom" name="landlord_provide_address" value="no" type="radio">
                                    <label for="radio-6" class="radio-custom-label">No</label>
                                </div>
                            </div>
                            <!-- Radio Group End -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">


                        <div class="option-btn btn-group">

                            <button type="button" class="pdf_btn_letter_2 btn-pd">
                                <img src="{{asset('site/img/icon-preview.png')}}" alt=""></button>
                            <button type="button" class="submit_btn_letter_2 btn-pd">
                                <img src="{{asset('site/img/icon-print.png')}}" alt=""></button>
                        </div>


                        {{--<div class="option-btn">--}}
                            {{--<button type="button" class="pdf_btn_letter_2" style="border: none;"><img src="{{asset('site/img/icon-preview.png')}}"></button>--}}

                            {{--<button ><img src="{{asset('site/img/icon-download.png')}}"></button>--}}
                        {{--</div>--}}
                    </div>
                    {{--<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">--}}
                        {{--<div class="option-btn">--}}
                            {{--<button type="button" class="submit_btn_letter_2" style="border: none;"><img src="{{asset('site/img/icon-print.png')}}"></button>--}}

                            {{--<button type="button" class="submit_btn_letter_1a">--}}
                            {{--<img src="{{asset('site/img/icon-download.png')}}">--}}
                            {{--</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">--}}
                        {{--<div class="option-btn">--}}
                            {{--<button style="border: none;"><img src="{{asset('site/img/icon-download.png')}}"></button>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>



        </form>
    </div>

</div>
