@extends('site-layout.site-layout')

@section('title')
    @php
        $title = 'Security Deposit Toolkit-Contact Us'
    @endphp
    {{$title}}

@endsection

@section('seo-tags')
    <link rel=canonical href="{{route('contactUs')}}">

    <meta property="og:url"  content="{{route('contactUs')}}"/>
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
        <div class="text_contact">
            <div class="container">
                <h1 class="contact"> C<span class="span4">ONTACT U</span>S </h1>
                <p>Questions? Comments? We’d love to hear from you!</p>
            </div>
        </div>
        <form method="post" action="{{route('sendContactEmail')}}">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form_icon">
                            <input type="Name*" class="form-control" id="" placeholder="Name*" name="name" required>
                            <span class="icons"><i class="far fa-user"></i></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form_icon">
                            <input type="Phone*" class="form-control"  placeholder="Phone" name="phone" required>
                            <span class="icons"><i class="fas fa-phone-volume"></i></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form_icon">
                            <input type="email" class="form-control"  placeholder="Email Address*" name="email" required>
                            <span class="icons"><i class="far fa-envelope"></i></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form_icon">
                            <input type="text" class="form-control"  placeholder="Subject*" name="subject" required>
                            <span class="icons"><i class="fas fa-space-shuttle"></i></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group form_icon">
                            <textarea class="form-control"  placeholder="Message*" name="message" required></textarea>
                            <span class="icons"><i class="far fa-comment"></i></span>

                        </div>
                        <div class="submit_form">
                            <button type="submit" class="btn btn-default btn-defaul"><p class="p1">Submit Now</p></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
