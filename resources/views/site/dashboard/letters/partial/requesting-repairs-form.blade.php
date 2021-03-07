<div class="col-sm-12 order-first order-lg-9 col-md-12 col-lg-9 col-xl-9 body_white1">
    <div class="row">
        @include('site.dashboard.letters.partial.form-selection')
        <form class="requesting_repair_form" method="post" action="{{route('post_requesting_repair')}}">
            @csrf
            <input type="hidden" name="requesting_repair" class="requesting_repair_form_class">
            <div class="row">
                <div class="col-sm-11 col-md-11 col-lg-11 col-xl-11 ">
                <div class="prfl_inside3">
                    <div class="wrapping_div">
                        <div class="form-row">
                        <div class="form-group col-md-12">
                            <label class="label-font" for="inputEmail4">What is your Landlord's first name? <img src="{{asset('site/img/profileedit.png')}}"></label>
                            <input type="text" class="form-control" placeholder="Landlord's First Name" name="landlord_first_name" onkeypress="return isCharacterKey(event)">
                        </div>
                        <div class="form-group col-md-12">
                            <label class="label-font" for="inputEmail4">What is your Landlord's last name? <img src="{{asset('site/img/profileedit.png')}}"></label>
                            <input type="text" class="form-control" placeholder="Landlord's Last Name" name="landlord_last_name" onkeypress="return isCharacterKey(event)">
                        </div>
                        <div class="form-group col-md-12">
                            <label class="label-font" for="inputEmail4">What is your Landlord's street address ? <img src="{{asset('site/img/profileedit.png')}}"></label>
                            <input type="text" class="form-control" placeholder="Enter Street Address" name="street_address">
                        </div>
                        <div class="form-group col-md-12">
                            <label class="label-font" for="inputEmail4">What is your Landlord's city? <img src="{{asset('site/img/profileedit.png')}}"></label>
                            <input type="text" class="form-control" placeholder="Enter City" name="city">
                        </div>
                        <div class="form-group col-md-12">
                            <label class="label-font" for="inputEmail4">What is your Landlord's state? <img src="{{asset('site/img/profileedit.png')}}"></label>
                            <input type="text" class="form-control" placeholder="Enter State" name="state">
                        </div>
                        <div class="form-group col-md-12">
                            <label class="label-font" for="inputEmail4">What is your Landlord's ZIP? <img src="{{asset('site/img/profileedit.png')}}"></label>
                            <input type="text" class="form-control" placeholder="Enter ZIP" name="zip">
                        </div>
                        <div class="form-group col-md-12">
                            <label class="label-font" for="inputEmail4">Landlord's email address (if available)? <img src="{{asset('site/img/profileedit.png')}}"></label>
                            <input type="email" class="form-control"  placeholder="Enter Landlord's Email" name="landlord_email">
                        </div>
                        <div class="form-group col-md-12">
                            <label class="label-font" for="inputEmail4">What is the address (street name or PO box, city, state,<img src="{{asset('site/img/profileedit.png')}}"> and ZIP) of the rental unit you are requesting repairs for?</label>
                            <input type="text" class="form-control" placeholder="Enter Full Address" name="full_address">
                        </div>
                    </div>
                    </div>
                </div>
            </div>

                <div class="col-sm-11 col-md-11 col-lg-11 col-xl-11 ">
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
                                <label class="label-font" for="inputEmail4">By what reasonable date do you want your landlord to<img src="{{asset('site/img/profileedit.png')}}">fix the issue?</label>
                                <input type="text" class="form-control date-picker"  placeholder="DD/MM/YYYY" name="repair_last_date" id="repair_last_date">
                                <i class="far fa-calendar-alt icon"></i>

                            </div>


                            <div class="form-group col-md-12 repair_items">
                                <label class="label-font" for="inputEmail4">How many separate issues do you believe need to be<img src="{{asset('site/img/profileedit.png')}}"> repaired?</label>
                                <input type="text" class="form-control repair_items_input" placeholder="Repair Items" name="repair_items[]">
                                <span class="margin-btn">
                                    <button type="button" id="add_more">+ Add More</button>
                                </span>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="row row-margin">
                    <div class="col-sm-12 col-md-offset-3 col-lg-1 col-xl-1"></div>

                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="option-btn btn-group">

                        <button type="button" class="pdf_btn_letter_request_repair btn-pd">
                            <img src="{{asset('site/img/icon-preview.png')}}" alt=""></button>
                        <button type="button" class="submit_btn_letter_request_repair btn-pd">
                            <img src="{{asset('site/img/icon-print.png')}}" alt=""></button>
                    </div>


                    {{--<div class="option-btn">--}}
                        {{--<button type="button" class="pdf_btn_letter_request_repair" style="border: none;"><img src="{{asset('site/img/icon-preview.png')}}"></button>--}}
                    {{--</div>--}}
                </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4"></div>

                    {{--<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">--}}
                    {{--<div class="option-btn">--}}
                        {{--<button type="button" class="submit_btn_letter_request_repair" style="border: none;"><img src="{{asset('site/img/icon-print.png')}}"></button>--}}

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
