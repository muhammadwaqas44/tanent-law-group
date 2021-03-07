<div class="slider_text">
    <div class="container">
        <div class="text_slider">
            <h1>Security Deposit Toolkit</h1>
            <p>
                Here at MySecurityDeposit.com, our goal is simple: to help California renters recover residential
                security deposits wrongfully withheld by landlords. This website offers renters free downloadable
                resources, a Security Deposit Toolkit (consisting of an eBook, sample forms, sample letters, and
                instructional videos), and information on how to get more help. To start, click on one of the two boxes
                below.
            </p>
            @if(Auth::check())
            @if(Auth::user()->is_paid == 0)
            <button type="button" class="btn btn_header_buy buyToolkitBtn">
                <a href="{{route('buyNow')}}"> Buy Toolkit</a></button>
            @endif
            @else
            <button type="button" class="btn btn_header_buy">
                <a href="javascript:void(0)" data-toggle="modal" data-target="#loginModal">BUY TOOLKIT</a>
            </button>
            @endif

        </div>

    </div>
</div>

<a data-fancybox class="video_button" href="https://www.youtube.com/embed/jc8Cfe-qvVo"><i class="fas fa-play"></i>
</a>

<a href="#scrool-down" class="aroow_1 scroll-area">
    <p class="vertical-text">Scroll Down</p>
    <span class="arrow">↓</span>
</a>
{{--https://www.youtube.com/watch?v=9Trx-ZDVgd4&feature=youtu.be--}}