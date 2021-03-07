@extends('site-layout.site-layout')

@section('title')
    Site Deposit Toolkit - Dashboard
@endsection


@section('content')

    <div class="body_main-prfl">
        <div class="container">
            <div class="row row_dashboard">
                @include('site.dashboard.sidebar.sidebar')
                @include('site.dashboard.dashboard.partial.dashboard-page')
            </div>
        </div>
    </div>

@endsection


@section('script')

    @include('site.dashboard.account.partial.thankyou_video')

    <script>
        @if(Session::has('thankYou'))
            $('#{{Session::get('thankYou')}}').modal('show');
        @endif
    </script>
@endsection
