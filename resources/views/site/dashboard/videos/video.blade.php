@extends('site-layout.site-layout')

@section('title')
    Site Deposit Toolkit - Video
@endsection


@section('content')

    <div class="body_main-prfl">
        <div class="container">
            <div class="row row_dashboard">
                @include('site.dashboard.sidebar.sidebar')
                @include('site.dashboard.videos.partial.gallery')
            </div>
        </div>
    </div>

@endsection

