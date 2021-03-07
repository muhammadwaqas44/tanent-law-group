<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    @yield('seo-tags')
    @include('site-layout.css')
</head>

<body>

@include('site.header.header')

@yield('content')

@include('site.footer.footer')


@include('site-layout.js')

@yield('script')

</body>

</html>
