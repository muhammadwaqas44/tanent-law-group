@extends('site-layout.site-layout')

@section('title')
    Site Deposit Toolkit - Edit Profile
@endsection


@section('content')

    <div class="body_main-prfl">
        <div class="container">
            <div class="row row_dashboard">
                @include('site.dashboard.sidebar.sidebar')
                @include('site.dashboard.user-profile.partial.form')
            </div>
        </div>
    </div>

@endsection


@section('script')

    <script>
        $(document).ready(function(){

            if($('.success').text() != '')
            {
                $(".success").fadeOut(5000);

            }

            if($('.error').text() != '')
            {
                $(".error").fadeOut(5000);

            }

            $('.cancel_btn').click(function () {
                window.location.reload('false');
            });



        });
    </script>

@endsection

