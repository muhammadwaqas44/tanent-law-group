@extends('site-layout.site-layout')

@section('title')
    @php
        $title = 'Security Deposit Toolkit-Buy Now'
    @endphp
    {{$title}}
@endsection

@section('seo-tags')
    <link rel=canonical href="{{route('buyNow')}}">

    <meta property="og:url"  content="{{route('buyNow')}}"/>
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{$title}}" />
    <meta property="og:description" content="{{$title}}" />
    <meta property="og:image" content="{{asset('site/img/new-logo.png')}}" />

    <meta name="twitter:title" content="{{$title}}">
    <meta name="twitter:description" content="{{$title}}">
    <meta name="twitter:image" content="{{asset('site/img/new-logo.png')}}">
    <meta name="twitter:card" content="{{$title}}">
@endsection


@section('content')
    <div class="outer_div_bg">
        <div class="outer_div">
            <div class="container">
                <div class="security">
                    <p class="text-center text_security">
                        Security Deposit Toolkit<br><span class="value_text1">A</span> <span class="span3">$1,700.00</span> <span class="value_text1">value for</span> <span class="span3"><strike>$99.00 </strike> $79.00</span>*
                    </p>
                    <div class="div_outer_li">
                        <div class="row">
                            <div class="col-md-4 col_margin5">
                                <div class="dacument">
                                    <span class="text-center"><i class="fas fa-file-signature"></i></span>
                                    <p class="text_dacument text-center">Documents</p>
                                </div>
                                <div class="li_data">
                                    <ul class="li_text">
                                        <li>Security Deposit Toolkit eBook</li>
                                        <li>Exhibit A1 - Sample Move Out Letter to Landlord (Issues)</li>
                                        <li>Exhibit A2 - Sample Move Out Letter to Landlord (No Issues)</li>
                                        <li>Exhibit B - Sample Security Deposit Demand Letter</li>
                                        <li class="adj-height1">Exhibit C - Sample Plaintiff's Claim and ORDER to Go To Small Claims Court (Small Claims Complaint)</li>
                                        <div class="show-full-description" style="display: none;">
                                            <li>Exhibit D - Security Deposit Expense Calculator</li>

                                            <li>Exhibit E - Sample Request to Postpone Small Claims Court Trial</li>
                                            <li>Exhibit F - Sample Factual Summary for Small Claims Court Trial</li>
                                            <li>Exhibit G - Small Claims Court Checklist</li>
                                            <li>Exhibit H - Sample Post-Judgment Letter to Landlord</li>
                                            <li>Plus
                                                <ul class="li_text">
                                                    <li>California Renter Moving Checklist</li>
                                                    <li>California Security Deposit Deduction Guidelines</li>
                                                    <li>Sample Letter to Landlord Requesting Repairs</li>
                                                    <li>Sample Moving Budget</li>
                                                </ul>
                                            </li>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-border">
                                <div class="dacument">
                                    <span class="text-center"><i class="fab fa-youtube"></i></span>
                                    <p class="text_dacument text-center">Videos
                                    </p>
                                </div>
                                <div class="li_data">
                                    <ul class="li_text">
                                        <li>Welcome & Orientation Video</li>
                                        <li>Understanding California’s Security Deposit Law</li>
                                        <li class="adj--height">Recovering Your Security Deposit
                                            <ul class="li_text">
                                                <li>Step 1: Preparing Your Move Out Letter and Requesting an Initial Inspection</li>
                                                <li class="adj-height">Step 2: Appearing for the Initial Inspection</li>
                                                <div class="show-full-description" style="display: none;">
                                                    <li>Step 3: Cleaning the Rental Unit and Addressing Any Identified Repairs</li>
                                                    <li>Step 4: Returning the Keys, Garage Door Opener, and Any Other Applicable Items on or Before the Date Your Tenancy Terminates</li>
                                                    <li>Step 5: If Your Landlord Has Not Returned Your Security Deposit Within Twenty-One Days, Sending a Second Letter</li>
                                                    <li>Step 6: If Your Landlord Does Not Return The Balance Of Your Security Deposit By The Date Stated In Your Letter, Decide Whether to Pursue This Matter In Small Claims Court</li>
                                                </div>
                                            </ul>
                                        </li>
                                        <div class="show-full-description" style="display: none;">

                                            <li>
                                                Preparing for and Attending Your Small Claims Court Trial
                                                <ul class="li_text">

                                                    <li>Step 1: Preparing Plaintiff’s Claim and ORDER to Go To Small Claims Court</li>
                                                    <li>Step 2: Filing Plaintiff’s Claim and ORDER to Go To Small Claims Court</li>
                                                    <li>Step 3: Arranging for Service of Plaintiff’s Claim and ORDER to Go To Small Claims Court</li>
                                                    <li>Step 4: Filing a Proof of Service</li>
                                                    <li>Step 5: Preparing for Trial</li>
                                                    <li>Step 6: Attending Trial</li>

                                                </ul>
                                            </li>
                                            <li>
                                                Enforcing Your Judgment
                                            </li>
                                        </div>

                                        {{--<div id="show-full-description" style="display: none;">--}}
                                        {{--<li>Recovering Your Security Deposit 6: If Your Landlord Does Not Return The Balance Of Your Security Deposit By The Date Stated In Your Letter, Decide Whether to Pursue This Matter In Small Claims Court</li>--}}
                                        {{--<li>Preparing for and Attending Your Small Claims Court Trial 1: Preparing Plaintiff’s Claim and ORDER to Go To Small Claims Court</li>--}}
                                        {{--<li>Recovering Your Security Deposit 6: If Your Landlord Does Not Return The Balance Of Your Security Deposit By The Date Stated In Your Letter, Decide Whether to Pursue This Matter In Small Claims Court</li>--}}
                                        {{--<li>Preparing for and Attending Your Small Claims Court Trial 1: Preparing Plaintiff’s Claim and ORDER to Go To Small Claims Court</li>--}}

                                        {{--<li>Recovering Your Security Deposit 6: If Your Landlord Does Not Return The Balance Of Your Security Deposit By The Date Stated In Your Letter, Decide Whether to Pursue This Matter In Small Claims Court</li>--}}
                                        {{--<li>Preparing for and Attending Your Small Claims Court Trial 4: Filing a Proof of Service</li>--}}
                                        {{--<li>Preparing for and Attending Your Small Claims Court Trial 5: Preparing for Trial</li>--}}
                                        {{--<li>Preparing for and Attending Your Small Claims Court Trial 5: Preparing for Trial</li>--}}
                                        {{--<li>Preparing for and Attending Your Small Claims Court Trial 5: Preparing for Trial</li>--}}
                                        {{--<li>Enforcing Your Judgment</li>--}}
                                        {{--<li>Getting Additional Help</li>--}}
                                        {{--<li>Getting Additional Help</li>--}}
                                        {{--<li>Preparing for and Attending Your Small Claims Court Trial 5: Preparing for Trial</li>--}}
                                        {{--</div>--}}
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-border">
                                <div class="dacument">
                                    <span class="text-center"><i class="fas fa-file-signature"></i></span>
                                    <p class="text_dacument text-center">Customized Letters
                                    </p>
                                </div>
                                <div class="li_data">
                                    <ul class="li_text">
                                        <li class="adj-height3">Notice of Termination of Tenancy Not Due to Any Issue with the Landlord, Rental Unit, or Tenancy</li>
                                        <li class="adj-height3">Notice of Termination of Tenancy Due to One or More Issues with the Landlord, Rental Unit, or Tenancy</li>
                                        <li class="adj-height3">Letter to Landlord Requesting Return of Security Deposit</li>
                                        <li class="adj-height3">Letter to Landlord Requesting Repairs</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="show-fewer34 submit_form">
                    <p>View Full <i class="fas fa-angle-down"></i></p>

                </div>
                @if(Auth::check())
                    @if(Auth::user()->is_paid == 0)
                        <div class="submit_form"><button type="button" class="btn btn_buy buyToolkitBtn" >BUY TOOLKIT</button></div>
                    @endif
                @else
                    <div class="submit_form"><button type="button" class="btn btn_buy buyToolkitBtn" >BUY TOOLKIT</button></div>
                @endif
                <p class="value_text">*Values based on the estimated time (6.8 hours) a tenant would need to spend with an attorney charging $250.00 per hour to obtain the equivalent information.</p>
            </div>
        </div>

    </div>
@endsection


@section('script')

    <script>
        $(document).ready(function () {
            $('.buyToolkitBtn').click(function(){
                @if(Auth::check())
                    window.location.href= "{{route('account')}}";
                @else
                    $('#loginModal').css('display','block');
                    $('#loginModal').modal('show');
                @endif
            });
        });
    </script>

@endsection
