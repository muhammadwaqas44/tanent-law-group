@extends('site-layout.site-layout')

@section('title')
    Site Deposit Toolkit - Account Information
@endsection


@section('content')


    <div class="body_main-prfl">
        <div class="container">
            <div class="row row_dashboard">
                @include('site.dashboard.sidebar.sidebar')
                @include('site.dashboard.account.partial.account-section')
            </div>
        </div>
    </div>


@endsection