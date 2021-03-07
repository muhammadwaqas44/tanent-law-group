@extends('site-layout.site-layout')

@section('title')
@php
$title = 'Security Deposit Toolkit'
@endphp
{{$title}}
@endsection

@section('seo-tags')
<link rel=canonical href="{{route('home')}}">

<meta property="og:url" content="{{route('home')}}" />
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

<div class="slider_video">
    @include('site.static-page.home.partials.video')
</div>

<div class="outer_div">
    @include('site.static-page.home.partials.buy-now')
</div>

<div class="outer_faqs">
    @include('site.static-page.home.partials.faq')
</div>

<div class="outer_div_need">
    @include('site.static-page.home.partials.need-help')
</div>

<div class="outer_img_gallry">
    @include('site.static-page.home.partials.video-gallery')
</div>


<div class="outer_contact" id="contact">
    @include('site.static-page.home.partials.contact-us')
</div>




@endsection


@section('script')

@endsection