<style>

    .blockUI{
        z-index: 1060 !important;
    }

</style>

<div class="center-navigation">
    <div class="container">
        <div class="row realitive-div">
            <div class="col-3">
                <div class="logo2">
                    <a href="{{route('home')}}">
                        <img src="{{asset('site/img/logo.png')}}" alt="logooo">
                    </a>
                </div>
            </div>
            <div class="col-9 position-static">
                <span class="custom-menu"><i class="fas fa-bars"></i></span>
                <ul class="navigation-ul-mo">
                    <li><a class="{{ (Request::route()->getName() == 'home') ? 'active-nav' : '' }}" href="{{route('home')}}">HOME</a></li>
                    <li><a class="{{ (Request::route()->getName() == 'buyNow') ? 'active-nav' : '' }}" href="{{route('buyNow')}}">BUY TOOLKIT</a></li>
{{--                    <li><a class="{{ (Request::route()->getName() == 'faq') ? 'active-nav' : '' }}" href="{{route('faq')}}">FAQS</a></li>--}}
                    <li><a class="{{ (Request::route()->getName() == 'blogTitle') ? 'active-nav' : '' }}" href="{{route('blogTitle')}}">BLOGS</a></li>
                    <li><a class="{{ (Request::route()->getName() == 'needMoreHelp') ? 'active-nav' : '' }}"  href="{{route('needMoreHelp')}}">MORE HELP?</a></li>
                    <li><a class="{{ (Request::route()->getName() == 'freeVideo') ? 'active-nav' : '' }}" href="{{route('freeVideo')}}">FREE VIDEOS</a></li>
                    <li><a class="{{ (Request::route()->getName() == 'aboutUs') ? 'active-nav' : '' }}" href="{{route('aboutUs')}}">ABOUT</a></li>
                    @if(!Auth::check())
                        <li><a href="javascript:void(0)" data-toggle="modal" data-target="#signupModal">CREATE ACCOUNT</a></li>
                        <li><a href="javascript:void(0)" data-toggle="modal" data-target="#loginModal">LOGIN</a></li>
                    @else
                        <li class="dropdown down-toggle">
                            <img src="{{asset('site/img/account.png')}}">
                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               {{Auth::user()->first_name}} {{Auth::user()->last_name}}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
                                <a class="dropdown-item {{ (Request::route()->getName() == 'dashboard') ? 'active-nav' : '' }}" href="{{route('dashboard')}}">Dashboard</a>
                                <a class="dropdown-item {{ (Request::route()->getName() == 'account') || (Request::route()->getName() == 'account-info') ? 'active-nav' : '' }}" href="{{route('account')}}">Account</a>
                                <a class="dropdown-item {{ (Request::route()->getName() == 'edit-profile') ? 'active-nav' : '' }}" href="{{route('edit-profile')}}">Edit Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#user-change-password-modal">Change Password</a>
                                {{--<a class="dropdown-item" href="#">Setting</a>--}}
                                <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#signout-modal">Sign Out</a>
                            </div>
                        </li>
                    @endif
                    <!--  <li><a href="testimonials.html">TESTIMONIALS</a></li>-->
                </ul>
            </div>

            {{--<div class="col-2">--}}
                {{--<ul>--}}
                    {{--@if(!Auth::check())--}}
                        {{--<li><a href="javascript:void(0)" data-toggle="modal" data-target="#signupModal">SignUp</a></li>--}}
                        {{--<li><a href="javascript:void(0)" data-toggle="modal" data-target="#loginModal">Login</a></li>--}}
                    {{--@else--}}
                        {{--<li class="dropdown down-toggle">--}}
                            {{--<img src="{{asset('site/img/account.png')}}">--}}
                            {{--<button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                {{--{{Auth::user()->first_name}} {{Auth::user()->last_name}}--}}
                            {{--</button>--}}
                            {{--<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >--}}
                                {{--<a class="dropdown-item {{ (Request::route()->getName() == 'account') || (Request::route()->getName() == 'dashboard') ? 'active-nav' : '' }}" href="{{route('dashboard')}}">Dashboard</a>--}}
                                {{--<a class="dropdown-item {{ (Request::route()->getName() == 'account') || (Request::route()->getName() == 'account-info') ? 'active-nav' : '' }}" href="{{route('account')}}">Account</a>--}}
                                {{--<a class="dropdown-item {{ (Request::route()->getName() == 'edit-profile') ? 'active-nav' : '' }}" href="{{route('edit-profile')}}">Edit Profile</a>--}}
                                {{--<a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#user-change-password-modal">Change Password</a>--}}
                                {{--<a class="dropdown-item" href="#">Setting</a>--}}
                                {{--<a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#signout-modal">Sign Out</a>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    {{--@endif--}}
                {{--</ul>--}}
            {{--</div>--}}
        </div>
    </div>
</div>

@if(!Auth::check())
    @include('site.registeration-popup.signup-modal')
    @include('site.registeration-popup.login-modal')
    @include('site.registeration-popup.forget-password-modal')
    @include('site.registeration-popup.change-password-modal')

@else
    @include('site.dashboard.change-password.change-password')
    @include('site.dashboard.signout.signout-modal')
@endif

