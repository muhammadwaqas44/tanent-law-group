@extends('site-layout.site-layout')

@section('title')
    @php
        $title = 'Security Deposit Toolkit-About Us'
    @endphp

    {{$title}}
@endsection


@section('seo-tags')
    <link rel=canonical href="{{route('aboutUs')}}">

    <meta property="og:url" content="{{route('aboutUs')}}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="{{$title}}"/>
    <meta property="og:description" content="{{$title}}"/>
    <meta property="og:image" content="{{asset('site/img/new-logo.png')}}"/>

    <meta name="twitter:title" content="{{$title}}">
    <meta name="twitter:description" content="{{$title}}">
    <meta name="twitter:image" content="{{asset('site/img/new-logo.png')}}">
    <meta name="twitter:card" content="{{$title}}">
@endsection


@section('content')
    <style>
        .main_security_disposal {
            margin-top: 40px;
            display: inline-block;
            margin-bottom: 40px;
            text-align: justify;
        }

        .main_security_disposal h2,
        .main_security_disposal h1,
        .main_security_disposal h3,
        .main_security_disposal h4,
        .main_security_disposal h5,
        .main_security_disposal h6 {
            margin-bottom: 20px;
            line-height: 35px;

        }

        .main_security_disposal a {
            text-decoration: underline;
        }

        .main_security_disposal p {
            margin-bottom: 20px;
        }

        @media (max-width: 576px) {
            .main_security_disposal {
                padding-left: 15px;
                padding-right: 15px;
            }

            .main_security_disposal h2, .main_security_disposal h1, .main_security_disposal h3, .main_security_disposal h4, .main_security_disposal h5, .main_security_disposal h6 {

                line-height: 29px;
                font-size: 20px;
            }
        }
    </style>
    <div class="container">
        <div class="main_security_disposal">
            <div>
                <h2>{!! $blog->title !!}</h2>
                {!! $blog->description !!}
            </div>

        </div>

    </div>
    <div class="outer_contact" id="contact">
        @include('site.static-page.home.partials.contact-us')
    </div>
@endsection
