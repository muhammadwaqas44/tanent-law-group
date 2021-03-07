@extends('site-layout.site-layout')

@section('title')
    Site Deposit Toolkit - Letter Listing
@endsection


@section('content')

    <div class="body_main-prfl">
        <div class="container">
            <div class="row row_dashboard">
                @include('site.dashboard.sidebar.sidebar')
                @include('site.dashboard.letters.partial.listing-table')
            </div>
        </div>
    </div>

@endsection
