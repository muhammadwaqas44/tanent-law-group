@extends('site-layout.site-layout')

@section('title')
    @php
        $title = 'Security Deposit Toolkit-Video'
    @endphp
    {{$title}}
@endsection


@section('seo-tags')
    <link rel=canonical href="{{route('freeVideo')}}">

    <meta property="og:url"  content="{{route('freeVideo')}}"/>
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

{{--    <div class="outer_freevideo_bg">--}}
{{--        <div class="container">--}}
{{--            <h1 class="free_video">Free California Tenant Video Resources</h1>--}}
{{--            <div class="row row-padg">--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="united-state-img">--}}
{{--                        <iframe width="560" height="315" src="https://www.youtube.com/embed/aWAESe7IY34" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="united-state-img">--}}
{{--                        <iframe width="560" height="315" src="https://www.youtube.com/embed/aWAESe7IY34" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="united-state-img">--}}
{{--                        <iframe width="560" height="315" src="https://www.youtube.com/embed/VBN8ZkSwuFc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="united-state-img">--}}
{{--                        <iframe width="560" height="315" src="https://www.youtube.com/embed/aF7YJTEb1Cc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="united-state-img">--}}
{{--                        <iframe width="560" height="315" src="https://www.youtube.com/embed/514zpN6KMyE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="united-state-img">--}}
{{--                        <iframe width="560" height="315" src="https://www.youtube.com/embed/m3uE3c9l17M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="united-state-img">--}}
{{--                        <iframe width="560" height="315" src="https://www.youtube.com/embed/T_RCNs0agQI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="united-state-img">--}}
{{--                        <iframe width="560" height="315" src="https://www.youtube.com/embed/iLeFJZKDNiE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="united-state-img">--}}
{{--                        <iframe width="560" height="315" src="https://www.youtube.com/embed/5dY49Czk6hE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="united-state-img">--}}
{{--                        <iframe width="560" height="315" src="https://www.youtube.com/embed/NpoHenIRvBM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="united-state-img">--}}
{{--                        <iframe width="560" height="315" src="https://www.youtube.com/embed/ib6E-YFklPE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="united-state-img">--}}
{{--                        <iframe width="560" height="315" src="https://www.youtube.com/embed/nJcYpMrsqpI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="united-state-img">--}}
{{--                        <iframe width="560" height="315" src="https://www.youtube.com/embed/rwI3GX5-IRE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="united-state-img">--}}
{{--                        <iframe width="560" height="315" src="https://www.youtube.com/embed/jIF55cPAT-M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="united-state-img">--}}
{{--                        <iframe width="560" height="315" src="https://www.youtube.com/embed/yuz3TZtLe-Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="united-state-img">--}}
{{--                        <iframe width="560" height="315" src="https://www.youtube.com/embed/64nkdZpvvD0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="united-state-img">--}}
{{--                        <iframe width="560" height="315" src="https://www.youtube.com/embed/bSMxuz0isY8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="united-state-img">--}}
{{--                        <iframe width="560" height="315" src="https://www.youtube.com/embed/1ybaDyyNkxc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="united-state-img">--}}
{{--                        <iframe width="560" height="315" src="https://www.youtube.com/embed/1UgNHBtGEl0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="united-state-img">--}}
{{--                        <iframe width="560" height="315" src="https://www.youtube.com/embed/HPzmHD2tu1M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="united-state-img">--}}
{{--                        <iframe width="560" height="315" src="https://www.youtube.com/embed/9Y5blX6LAEY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="united-state-img">--}}
{{--                        <iframe width="560" height="315" src="https://www.youtube.com/embed/DouPECfxSfQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="united-state-img">--}}
{{--                        <iframe width="560" height="315" src="https://www.youtube.com/embed/OBGufWyb1VU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="united-state-img">--}}
{{--                        <iframe width="560" height="315" src="https://www.youtube.com/embed/TdoRIeG4xVc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                    <div class="united-state-img">--}}
{{--                        <iframe width="560" height="315" src="https://www.youtube.com/embed/2aT3CXwQCXk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="body_end_pr1">*This page may be considered attorney advertising.  Pursuant to California Rule of Professional Conduct 7.2, Tenant Law Group, PC, located at 649 Mission Street, 5th Floor, San Francisco, CA 94105-4128, is responsible for this content.--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}



{{--    </div>--}}

<div class="container">
    <div class="security-full-div">
        <h1 class="free">Free California Tenant Video Resources</h1>
    </div>
</div>

<div class="outer_freevideo_bg">
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
            <div class="first-card">
                <div class="card">
                    <div class="black-div">
                        <iframe width="352" height="230" src="https://www.youtube.com/embed/u2u1QkVN0q8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
{{--                        <a href="#">--}}
{{--                            <span><i class="fas fa-play-circle"></i></span></a>--}}
                    </div>
                    <div class="card-body">
                        <p class="card-text">IS THERE A DIFFERENCE BETWEEN A SECURITY DEPOSIT, A DAMAGE DEPOSIT, AND A PET DEPOSIT?</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
            <div class="first-card">
                <div class="card">
                    <div class="black-div">
                        <iframe width="352" height="230" src="https://www.youtube.com/embed/X7Xn5YiJSik" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </div>
                    <div class="card-body">
                        <p class="card-text">UNDER WHAT CIRCUMSTANCES MAY A LANDLORD HOLD MY SECURITY DEPOSIT?</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
            <div class="first-card">
                <div class="card">
                    <div class="black-div">
                        <iframe width="352" height="230" src="https://www.youtube.com/embed/Pwo4oqRxTCc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </div>
                    <div class="card-body">
                        <p class="card-text">IS A LAWSUIT AGAINST MY LANDLORD A PUBLIC RECORD?</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
            <div class="first-card">
                <div class="card">
                    <div class="black-div">
                        <iframe width="352" height="230" src="https://www.youtube.com/embed/-6ODQWsHufc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="card-body">
                        <p class="card-text">AM I RESPONSIBLE FOR MAINTAINING AND/OR MARKETING REPAIRS TO MY RENTAL UNIT?</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
            <div class="first-card">
                <div class="card">
                    <div class="black-div">
                        <iframe width="352" height="230" src="https://www.youtube.com/embed/QodgqzJ9WZ0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </div>
                    <div class="card-body">
                        <p class="card-text">MY LANDLORD IS NOT RESPONDING TO MY REQUESTS TO MAKE REPAIRS. WHAT DO I DO?</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
            <div class="first-card">
                <div class="card">
                    <div class="black-div">
                        <iframe width="352" height="230" src="https://www.youtube.com/embed/xOFGTOnMBrw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </div>
                    <div class="card-body">
                        <p class="card-text">IS A LANDLORD REQUIRED TO ACCEPT THE TENANCY OF MY REGISTERED SERVICE OR EMOTIONAL SUPPORT ANIMAL?</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
            <div class="first-card">
                <div class="card">
                    <div class="black-div">
                        <iframe width="352" height="230" src="https://www.youtube.com/embed/nErh45Qjp08" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </div>
                    <div class="card-body">
                        <p class="card-text">MY LANDLORD JUST GAVE ME A THREE-DAYS NOTICE. WHAT DO I DO?</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="first-card">
                        <div class="card">
                            <div class="black-div">
                                <iframe width="352" height="230" src="https://www.youtube.com/embed/3N7h2HxFSM4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                            <div class="card-body">
                                <p class="card-text">MY LANDLORD JUST GAVE ME A THRIRTY- OR SIXTY-DAY NOTICE OF TERMINATION OF TENANCY. WHAT DO I DO?</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="first-card">
                        <div class="card">
                            <div class="black-div">
                                <iframe width="352" height="230" src="https://www.youtube.com/embed/G5Rlp8ecGhg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                            <div class="card-body">
                                <p class="card-text">WHAT IS RENT CONTROL?</p>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="first-card">
                        <div class="card">
                            <div class="black-div">
                                <iframe width="352" height="230" src="https://www.youtube.com/embed/wha-NAv464o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                            <div class="card-body">
                                <p class="card-text">HOW DO I KNOW IF MY CITY HAS RENT CONTROL?</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="first-card">
                        <div class="card">
                            <div class="black-div">
                                <iframe width="352" height="230" src="https://www.youtube.com/embed/9L33tPSIqfY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                            <div class="card-body">
                                <p class="card-text">WHAT IS EVICTION CONTROL?</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="first-card">
                        <div class="card">
                            <div class="black-div">
                                <iframe width="352" height="230" src="https://www.youtube.com/embed/kHSJTVLBotw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                            <div class="card-body">
                                <p class="card-text">HOW DO I KNOW IF MY CITY HAS EVICTION CONTROL?</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="first-card">
                        <div class="card">
                            <div class="black-div">
                                <iframe width="352" height="230" src="https://www.youtube.com/embed/s7SNgnJhEDk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                            <div class="card-body">
                                <p class="card-text">WHAT IS A WRONGFUL EVICTION?</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="first-card">
                        <div class="card">
                            <div class="black-div">
                                <iframe width="352" height="230" src="https://www.youtube.com/embed/pOy_eHWU9WI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                            <div class="card-body">
                                <p class="card-text">   WHAT IS A CONSTRUCTIVE EVICTION?</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="first-card">
                        <div class="card">
                            <div class="black-div">
                                <iframe width="352" height="230" src="https://www.youtube.com/embed/nSZYXRH81QM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                            <div class="card-body">
                                <p class="card-text">MY LANDLORD IS SELLING MY BUILDING DOES THIS MEAN I HAVE TO MOVE OUT?</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="first-card">
                        <div class="card">
                            <div class="black-div">
                                <iframe width="352" height="230" src="https://www.youtube.com/embed/_0VV43cQ02Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                            <div class="card-body">
                                <p class="card-text">ARE THERE ANY RIGHTS THAT I CANNOT GIVE UP AS A TENANT?</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="first-card">
                        <div class="card">
                            <div class="black-div">
                                <iframe width="352" height="230" src="https://www.youtube.com/embed/bH7lTV_sQX8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                            <div class="card-body">
                                <p class="card-text">DOES MY IMMIGRATION STATUS AFFECT MY RIGHTS AS A TENANT?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="first-card">
                        <div class="card">
                            <div class="black-div">
                                <iframe width="352" height="230" src="https://www.youtube.com/embed/2I8utX_shZc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                            <div class="card-body">
                                <p class="card-text">UNDER WHAT CIRCUMSTANCES MAY A LANDLORD ENTER MY RENTAL UNIT?
</p>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="first-card">
                        <div class="card">
                            <div class="black-div">
                                <iframe width="352" height="230" src="https://www.youtube.com/embed/-7j3QrYDXfM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                            <div class="card-body">
                                <p class="card-text">I JUST DISCOVERD THAT MY UNIT IS ILLEGA. WHAT DO I DO?
</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="first-card">
                        <div class="card">
                            <div class="black-div">
                                <iframe width="352" height="230" src="https://www.youtube.com/embed/uy5v4-XpkJk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                            <div class="card-body">
                                <p class="card-text">DO I STILL HAVE RIGHTS EVEN IF NEVER SIGNED A WRITTEN LEASE?</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="first-card">
                        <div class="card">
                            <div class="black-div">
                                <iframe width="352" height="230" src="https://www.youtube.com/embed/ib-dL8xipWQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                            <div class="card-body">
                                <p class="card-text">WHAT IS A BUYOUT?
</p>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="first-card">
                        <div class="card">
                            <div class="black-div">
                                <iframe width="352" height="230" src="https://www.youtube.com/embed/EpCzdmBmAG0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                            <div class="card-body">
                                <p class="card-text">WHAT IS AN UNLAWFUL DETAINER?
</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="first-card">
                        <div class="card">
                            <div class="black-div">
                                <iframe width="352" height="230" src="https://www.youtube.com/embed/JLbGq9RF_dE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                            <div class="card-body">
                                <p class="card-text">WHAT SHOULD I BE LOOKING FOR WHEN HIRING AN TENANT ATTORNEY?</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                





    </div>
</div>
</div>





@endsection
