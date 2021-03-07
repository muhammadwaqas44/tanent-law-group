@extends('site-layout.site-layout')

@section('title')
    @php
        $title = 'Security Deposit Toolkit-Disclaimer'
    @endphp
    {{$title}}
@endsection


@section('seo-tags')
    <link rel=canonical href="{{route('disclaimer')}}">

    <meta property="og:url"  content="{{route('disclaimer')}}"/>
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

<div class="container-fluid">
    <div class="container mt-5">
        <div class="main_heading">Disclaimer</div>
        <div class="container_in1">
            <p>Communications between you and Security Deposit Toolkit, Inc. are governed by our
                <a href="{{route('termsOfUse')}}">Terms of Use</a> but not by the attorney-client privilege or attorney work product privilege.
                Security Deposit Toolkit, Inc. is a legal publishing and document automation company that provides
                self-help services to renters to assist them in recovering residential security deposits wrongfully
                withheld by landlords.  Security Deposit Toolkit, Inc. is not a law firm nor a substitute for an
                attorney or law firm. We cannot provide any kind of advice, explanation, opinion, or
                recommendation about possible legal rights, remedies, defenses, options, selection of forms, or strategies.
                Your access to the website is subject to our <a href="{{route('termsOfUse')}}" >Terms of Use</a>.</p>
        </div>
    </div>
</div>
@endsection
