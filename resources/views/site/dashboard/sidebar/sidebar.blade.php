<div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 body_white">

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 adj-pad adj-wid {{Request::route()->getName() == 'dashboard' ? 'aside-active':''}}">
            <a href="{{route('dashboard')}}" class="prfl_inside"><h2 class="change-img"><span class="img-one"></span><span>Dashboard</span></h2></a>
        </div>

        @if(Auth::user()->is_paid ==  1)
            @if(Request::route()->getName() == 'letter-1a' || Request::route()->getName() == 'letter-1b' ||
                Request::route()->getName() == 'letter-2' || Request::route()->getName() == 'request_repairs')
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 adj-pad adj-wid aside-active">
                    <a href="{{route('letter-1a')}}" class="prfl_inside1"><h3 class="change-img">
                                <span class="img-two">
                                    <span>Customized Letter Builder</span>
                                </span></h3>
                    </a>
                </div>
            @else
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 adj-pad adj-wid">
                    <a href="{{route('letter-1a')}}" class="prfl_inside1"><h3 class="change-img">
                                <span class="img-two">
                                    <span>Customized Letter Builder</span>
                                </span></h3>
                    </a>
                </div>
            @endif

                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 adj-pad adj-wid {{Request::route()->getName() == 'getLetter' ? 'aside-active':''}}">
                    <a href="{{route('getLetter')}}" class="prfl_inside1">
                        <h3 class="change-img"><span class="img-four">
                        <span>My Customized Letters</span></span>
                        </h3>
                    </a>
                </div>

        @endif

        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 adj-pad adj-wid {{Request::route()->getName() == 'dashbaordVideo' ? 'aside-active':''}}">
            <a href="{{route('dashbaordVideo')}}" class="prfl_inside1"><h3 class="change-img"><span class="img-three"><span>Videos</span></span></h3></a>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 adj-pad adj-wid {{Request::route()->getName() == 'otherDocument' ? 'aside-active':''}}">
            <a href="{{route('otherDocument')}}" class="prfl_inside1">
                <h3 class="change-img">
                    <span class="img-two"><span>Other Documents</span></span></h3></a>
        </div>


        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 adj-pad adj-wid {{Request::route()->getName() == 'account-info' || Request::route()->getName() == 'account'  ? 'aside-active':''}}">
            <a href="{{route('account')}}" class="prfl_inside1"><h3 class="change-img"><span class="img-five"><span>Account</span></span></h3></a>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 adj-pad adj-wid {{Request::route()->getName() == 'edit-profile' ? 'aside-active':''}}">
            <a href="{{route('edit-profile')}}" class="prfl_inside1"><h3 class="change-img"><span class="img-six"><span>Edit Profile</span></span></h3></a>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 adj-pad adj-wid" >
            <a href="javascript:void(0)" data-toggle="modal" data-target="#user-change-password-modal" class="prfl_inside1"><h3 class="change-img"><span class="img-seven"><span> Change Password</span></span></h3></a>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 adj-pad adj-wid">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#signout-modal" class="prfl_inside1"><h3 class="change-img"><span class="img-nine"><span>Signout</span></span></h3></a>
        </div>




    </div>

</div>


<script>
    $('.change-img').click(function(){
        $(".change-img").parent().removeClass('aside-active');
        if($(this).parent().data('toggle') == 'modal')
        {

        }
        else {
            $(this).parent().addClass('aside-active');
        }
    })
</script>

