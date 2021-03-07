<div class="col-sm-12 order-first order-lg-9 col-md-12 col-lg-9 col-xl-9 body_white1">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="prfl_inside2">
                <div class="edit_profile account_page">
                    <h3>Buy Toolkit</h3>
                    <div class="body_end_pr1">To access all the materials on this website, you must pay a one-time fee
                        of $79.00. Please enter information in the fields below and click the "Buy Toolkit" button.
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
            <div class="prfl_inside3">

                <span class="error alert-danger" id="error_id"></span>
                <span class="success alert-success"></span>

                <form id="payment_form">
                    @csrf


                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Full Name on Credit Card:</label>
                            <input type="text" class="form-control" placeholder="Enter Full Name on Credit Card"
                                   name="full_name" name="full_name">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Credit Card Number:</label>
                            <input type="text" class="form-control"
                                   placeholder="Enter Complete Credit Card Number (without Spaces)" id="card_number"
                                   name="card_number">
                        </div>
                        <div class="form-group col-md-12">

                            <label for="inputEmail4">Credit Card Expiration Month:</label>
                            <select class="form-control" name="exp_month" id="exp_month">
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>

                            </select>
                            {{--                            <input type="text" class="form-control" id="exp_month" placeholder="MM" onkeypress="return isNumberKey(event)" maxlength="02" name="exp_month">--}}

                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Credit Card Expiration Year:</label>
                            <input type="text" class="form-control" placeholder="YYYY" maxlength="04"
                                   onkeypress="return isNumberKey(event)" id="exp_year" name="exp_year">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">CVC:</label>
                            <input type="text" class="form-control" placeholder="Enter Three-Digit Security Code"
                                   name="cvc" maxlength="06" id="cvc">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Coupon Code:</label>
                            <input type="text" class="form-control" placeholder="Enter Coupon Code"
                                   name="coupon_code" id="code">
                        </div>


                        <div class="form-group col-md-12 body_end_pr1">
                            <input type="checkbox" name="security-terms" id="checkbox_security">
                            <span>By checking this box, you understand that purchasing the Security Deposit Toolkit and/or utilizing any of the materials on this website do not guarantee you will recover your security deposit; and you agree to be bound by MySecurityDeposit.com's
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#terms-of-user-modal">Terms of Use</a>.</span>
                        </div>
                    </div>



                    <button type="button" class="btn btn-primary stipe_submit_btn">Buy Toolkit</button>
                    {{--<button type="button" class="btn btn-prim.ary">Cancel</button>--}}
                </form>

            </div>
            @include('site.dashboard.account.partial.terms-of-user-modal')

        </div>
    </div>

</div>


