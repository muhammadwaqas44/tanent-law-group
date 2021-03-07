@extends('site-layout.site-layout')

@section('title')
@php
$title = 'Security Deposit Toolkit-About Us'
@endphp

{{$title}}
@endsection


@section('seo-tags')
<link rel=canonical href="{{route('aboutUs')}}">

<meta property="og:url" content="{{route('aboutUs')}}" />
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
<div class="outer_policy_bg">
    <div class="container a_us_pad">
        <div class="row">

            <div class="col-md-6 m-0">
                {{--            <img style="margin-bottom: 5px" src="{{asset('site/img/about-pic.png')}}" alt="about
                image" width="100%" />--}}

                <img src="{{asset('site/img/about.png')}}" alt="about image" width="100%" />

            </div>
            <div class="col-md-6 ">

                <div class="about_text1">
                    <span class="text-center1">About</span>
                </div>
                <span class="about_text_p">
                    <p>We at Security Deposit Toolkit wanted to find an efficient and cost-effective solution to a very
                        common problem facing tenants, empowering them to fight back. Our founder, a tenant rights
                        attorney who has helped countless renters recover security deposits, created the Security
                        Deposit Toolkit. Consisting of an eBook, sample forms, sample letters, and instructional videos,
                        the Toolkit incorporates the best practices from our founder’s years of experience fighting on
                        behalf tenants for the return of their security deposits.</p>
                    <p>Whether your goal is to recover a residential security deposit wrongfully withheld by a landlord,
                        or just to take proactive steps in the hope of avoiding this outcome, we hope you find the
                        information on our website and in the Toolkit helpful. Good luck!</p>

                </span>

                <!-- <button class="button3"><a href="about -us.html" target="blank"> Read More </a><span class="arrow_reed">&#8594;</span></button>-->
            </div>


            <div class="col-md-6 m-0  mt-4">
                <img src="{{asset('site/img/about-pic.jpg')}}" alt="about image" width="100%" />

                {{--            <img src="{{asset('site/img/about-pic.jpg')}}" alt="about image" width="100%" />--}}

            </div>
            <div class="col-md-6 m-0 about_top">
                <div class="about_text1">
                    <span class="text-center1">Mission</span>
                </div>
                <span class="about_text_p">
                    Our mission is to help California tenants recover residential security deposits wrongfully withheld
                    by landlords. We are committed to empowering California renters with information and resources to
                    help them avoid being taken advantage of by unscrupulous landlords. We always strive to deliver as
                    much value to our customers as possible and welcome any <a href="{{route('home')}}#contact"> comments </a> on how we
                    can improve our website, materials, or templates.
                </span>

                <!-- <button class="button3"><a href="about -us.html" target="blank"> Read More </a><span class="arrow_reed">&#8594;</span></button>-->
            </div>




            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-1">
                <p class="about_text_p"></p>
            </div>
        </div>
    </div>
</div>
@endsection