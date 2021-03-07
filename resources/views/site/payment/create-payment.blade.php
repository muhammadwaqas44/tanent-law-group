@extends('site-layout.site-layout')

@section('title')
    Payment
@endsection


@section('content')



    <div class="container">

        <span class="alert-danger error" style="display: none;">
            
        </span>
        <form id="payment_form">
            @csrf
            <div class="form-group">
                <label for="email">Card Holder Name:</label>
                <input type="text" class="form-control" id="full_name" placeholder="Enter name" name="full_name">
            </div>

            <div class="form-group">
                <label for="email">Credit Card Number:</label>
                <input type="tel" class="form-control" id="card_number" placeholder="Enter Number" name="card_number">
            </div>

            <div class="form-group">
                <label for="email">Expiry Month:</label>
                <input type="number" class="form-control" id="exp_month" placeholder="MM" name="exp_month">
            </div>

            <div class="form-group">
                <label for="email">Expiry Year:</label>
                <input type="number" class="form-control" id="exp_year" placeholder="YYYY" name="exp_year">
            </div>

            <div class="form-group">
                <label for="email">CVC:</label>
                <input type="text" class="form-control" id="cvc" placeholder="3 digit security code" name="cvc" maxlength="06">
            </div>

            <button type="button" class="btn btn-primary stipe_submit_btn">Submit</button>
        </form>
    </div>

@endsection

@section('script')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.2.3/jquery.payment.min.js"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    @include('site.payment.script.ajax_call')

    <script>

        $(document).ready(function() {
            $('input[name=card_number]').payment('formatCardNumber');
        });
    </script>



@endsection