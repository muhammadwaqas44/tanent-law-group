@extends('site-layout.site-layout')

@section('title')
@php
$title = "Security Deposit Toolkit-Already Moved Out"
@endphp
{{$title}}
@endsection


@section('seo-tags')
<link rel=canonical href="{{route('landingPage2')}}">

<meta property="og:url" content="{{route('landingPage2')}}" />
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



<div class="header_div">
    <h1>Already moved out and fighting<br> to get your security deposit back?</h1>

</div>

<div class="container">
    <div class="row mt-5">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div class="div_col1">
                <h1>Landlord Won't Return Your Security Deposit?</h1>
                <div>
                    <p>If you moved out of your California rental unit at least twenty-one days ago and your
                        landlord is wrongfully withholding all or part of your security deposit, click the "Free
                        Download" button below for the following:</p>
                    <ul class="li_text">
                        <li>Free California Security Deposit Deduction Guidelines,</li>
                        <li>Free California Renter Moving Checklist,</li>
                        <li>Free Sample Moving Budget, and</li>
                        <li>Free Letter to Landlord Requesting Repairs.</li>
                    </ul>
                </div>

            </div>
            <div class="header_div-1">
                {{--                    <button>--}}
                {{--                        <a href="{{asset('site/files/MySecurityDeposit.com-free-download2.zip')}}">
                <h2>Free--}}
                    {{--                                Download</h2></a>--}}
                    {{--                    </button>--}}
                    <button>
                        {{--                        <a href="{{asset('site/files/MySecurityDeposit.com-free-download1.zip')}}">
                        <h2>Free Download</h2></a>--}}
                        <a data-toggle="modal" data-target="#subscrtionPopup">
                            <h2>Free Download</h2>
                        </a>
                    </button>
                    <button>
                        <a href="{{route('buyNow')}}">
                            <h2>Buy Toolkit</h2>
                        </a>
                    </button>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div class="div_col2">
                <iframe width="540" height="315" src="https://www.youtube.com/embed/GmuTso370MU" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

@include('site.registeration-popup.subscription-modal')

@endsection