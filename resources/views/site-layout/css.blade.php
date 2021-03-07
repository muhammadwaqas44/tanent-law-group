<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="icon" href="/site/img/favicon.png" type="image/gif">

<link href="{{asset('site/css/bootstrap.4.3.1.min.css')}}" type="text/css" rel="stylesheet"/>
<link href="{{asset('site/css/lightbox.css')}}" type="text/css" rel="stylesheet"/>
<link href="{{asset('site/css/fontawesome-all.css')}}" type="text/css" rel="stylesheet"/>
<link href="{{asset('site/css/jquery-ui.css')}}" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link href="{{asset('site/css/toastr.css')}}" type="text/css" rel="stylesheet">
<link href="{{asset('site/css/select2.min.css')}}" type="text/css" rel="stylesheet">

<link href="{{asset('site/css/style.css')}}" type="text/css" rel="stylesheet"/>

@if(Request::route()->getName() == 'blogTitle')
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet">
@endif
@if(Request::route()->getName() == 'account')
    <style>
        .body_white {
            max-height: 665px !important;
        }

    </style>
@endif


<!-- Favi -->
{{--<link rel="apple-touch-icon" sizes="180x180" href="{{asset('site/img/favi/apple-touch-icon.png')}}">--}}
{{--<link rel="icon" type="image/png" sizes="32x32" href="{{asset('site/img/favi/favicon-32x32.png')}}">--}}
{{--<link rel="icon" type="image/png" sizes="16x16" href="{{asset('site/img/favi/favicon-16x16.png')}}">--}}
{{--<link rel="manifest" href="{{asset('site/img/favi/site.webmanifest')}}">--}}

<script src="{{asset('site/js/jquery.v3.4.0.min.js')}}"></script>
{{--<link href="{{asset('site/css/jquery.fancybox.css')}}">--}}
{{--<script src="{{asset('site/js/jquery.fancybox.pack.js')}}"></script>--}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

