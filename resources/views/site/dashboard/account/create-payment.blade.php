@extends('site-layout.site-layout')

@section('title')
    Site Deposit Toolkit - Account Page
@endsection


@section('content')
    <div class="body_main-prfl">
        <div class="container">
            <div class="row row_dashboard">
                @include('site.dashboard.sidebar.sidebar')
                @include('site.dashboard.account.partial.form')
            </div>
        </div>
    </div>



@endsection


@section('script')

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.2.3/jquery.payment.min.js"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    @include('site.dashboard.account.script.ajax_call')

    <script>

        $(document).ready(function() {
            $('input[name=card_number]').payment('formatCardNumber');


        });

    </script>

@endsection
