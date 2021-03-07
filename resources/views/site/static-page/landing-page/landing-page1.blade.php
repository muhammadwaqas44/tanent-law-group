    @extends('site-layout.site-layout')

    @section('title')
        @php
            $title = "Security Deposit Toolkit-Haven't Moved Out Yet"
        @endphp
    {{$title}}
    @endsection


    @section('seo-tags')
        <link rel=canonical href="{{route('landingPage1')}}">

        <meta property="og:url"  content="{{route('landingPage1')}}"/>
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
    <div class="header_div">
        <h1>Haven’t moved out yet, but want to reduce the likelihood of deductions<br> from your residential Security Deposit?</h1>
    </div>
    <div class="container container_box">
        <div class="row mt-5 mb-5">
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="header_div-1">
                    <h1>Before moving out of your rental unit...</h1>
                    <p>If you are a California residential renter and need to move, click the button below to download a FREE moving checklist, a free sample moving budget, and a free letter to your landlord requesting repairs. The Security Deposit Toolkit will reduce the likelihood of deductions from your residential security deposit and assist you in the event your landlord nonetheless wrongfully withholds all or part of your residential security deposit.</p>
                    <button>
{{--                        <a href="{{asset('site/files/MySecurityDeposit.com-free-download1.zip')}}"><h2>Free Download</h2></a>--}}
                        <a data-toggle="modal" data-target="#subscrtionPopup"><h2>Free Download</h2></a>
                    </button>
                    <button>
                        <a href="{{route('buyNow')}}"><h2>Buy Toolkit</h2></a>
                    </button>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 row_0">
                <iframe width="540" height="315" src="https://www.youtube.com/embed/tyC78FV6VEg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row first_row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 row_1">
                <h1>When?</h1>
            </div>
            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 row_2">
                <div>
                    <h1>What?</h1>
                </div>
            </div>
        </div>
        <div class="row main_div-row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 row_3"><p class="box_p">Now</p></div>
            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 row_4">
                <p class="box_p"><b>Ensure You Know Your Rights When It Comes to Your Security Deposit.</b> The Security Deposit Toolkit, which includes an eBook, sample forms, sample letters, and instructional videos, is available for purchase <a href="{{route('buyNow')}}" target="blank">here</a>.</p>
            </div> </div>
        <div class="row main_div-row">
            <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 row_3"><p class="box_p">Now</p></div>
            <div class="col-sm-12 col-md-12 col-lg-9 col-xl-9 row_4"><p class="box_p"><b>Start Looking For A New Rental Unit.</b> Friends and acquaintances are always a great starting point. Post on social
                    media (e.g., Facebook, Twitter) (1) what type of rental unit you are looking for (including the number of bedrooms and
                    bathrooms), (2) where you are looking to rent, (3) when you are looking to move, and (4) (if applicable) your rental
                    budget. Here are some useful websites:</p>
                <ul class="box-ul1">
                    <li>
                        Craigslist <a href="https://craigslist.org" target="blank">(https://craigslist.org)</a>
                    </li>
                    <li>
                        Oodle.com <a href="https://apartments.oodle.com/forrent/" target="blank"> (https://apartments.oodle.com/forrent/)</a>
                    </li>
                    <li>
                        Zillow.com <a href="https://www.zillow.com/homes/for_rent/" target="blank">(https://www.zillow.com/homes/for_rent/)</a>
                    </li>
                    <li>
                        Hotpads.com <a href="https://hotpads.com/" target="blank">(https://hotpads.com/)</a>
                    </li>
                    <li>
                        RentalHouses.com  <a href="https://www.rentals.com/" target="blank">(https://www.rentals.com/)</a>
                    </li>
                    <li>
                        Realtor.com  <a href="https://www.realtor.com/rentals" target="blank">(https://www.realtor.com/rentals)</a>
                    </li>
                    <li>
                        Padmapper.com <a href="https://www.padmapper.com/" target="blank">(https://www.padmapper.com/)</a>
                    </li>
                    <li>
                        Trulia.com  <a href="https://www.trulia.com/rent/" target="blank">(https://www.trulia.com/rent/)</a>
                    </li>
                    <li>
                        Lovely.com <a href="https://livelovely.com/" target="blank">(https://livelovely.com/) </a>
                    </li>
                    <li>
                        Rentals.com <a href="https://www.rentals.com/" target="blank">(https://www.rentals.com/)</a>
                    </li>
                    <li>
                        Rendigs.com <a href="https://www.rentdigs.com/" target="blank">(https://www.rentdigs.com/)</a>
                    </li>
                    <li>
                        Rent.com <a href="https://www.rent.com/manage" target="blank">(https://www.rent.com/manage)</a>
                    </li>
                    <li>
                        Zumper <a href="https://www.zumper.com/" target="blank">(https://www.zumper.com/)</a>
                    </li>
                    <li>
                        Apartments.com <a href="https://www.apartments.com/" target="blank">(https://www.apartments.com/)</a>
                    </li>
                    <li>
                        Walk Score <a href="https://www.walkscore.com/apartments/" target="blank">(https://www.walkscore.com/apartments/)</a>
                    </li>
                    <li>
                        Sublet.com <a href="https://www.sublet.com/" target="blank">(https://www.sublet.com/)</a>
                    </li>
                    <li>
                        Move <a href="http://www.move.com/" target="blank">(http://www.move.com/)</a>
                    </li>
                    <li>
                        People with Pets <a href="http://www.peoplewithpets.com/" target="blank">(http://www.peoplewithpets.com/)</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row main_div-row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 row_3"><p class="box_p">Now</p></div>
            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 row_4">
                <p class="box_p"><b>Research Jobs, Daycare, Schools.</b> If you or your significant other needs to find a new job, start looking on Linkedin.com<br>
                    Indeed.com, Ziprecruiter.com, Craigslist.org, etc. If you want to work somewhere in particular, contact friends,
                    acquaintances, and colleagues. If you have children, immediately begin researching nannies, daycare, and/or schools.</p>
            </div> </div>
        <div class="row main_div-row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 row_3"><p class="box_p">Now</p></div>
            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 row_4">
                <p class="box_p"><b>Create A Moving Budget.</b> Your costs may include:</p>
                <ul class="box-ul1">
                    <li>
                        Security Deposit Toolkit;
                    </li>
                    <li>
                        Rental application fees;
                    </li>
                    <li>
                        Security deposit for your new rental unit (likely due at the time you sign a new lease);
                    </li>
                    <li>
                        Moving truck or pod rental;
                    </li>
                    <li>
                        Moving boxes;
                    </li>
                    <li>
                        Fees associated with closing utility accounts at current rental unit/opening utility accounts at new rental unit;
                    </li>
                    <li>
                        Cleaning costs at current rental unit (e.g., steam cleaning rug) to avoid deductions from security deposit;
                    </li>
                    <li>
                        Repairs at current rental unit to avoid deductions from security deposit;
                    </li>
                    <li>
                        (If applicable) Lost wages due to time away from work.
                    </li>
                </ul>
                <p class="box_p">[Free sample budget available for download <a href="{{asset('site/files/Sample-Moving-Budget.xlsx')}}">here</a>.]</p>
            </div>
        </div>
        <div class="row main_div-row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 row_3"><p class="box_p">Now</p></div>
            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 row_4">
                <p class="box_p"><b>Find Out When You Need To Give Your Current Landlord ("Prior LL") Notice.</b> If your lease is month-to-month, you'll
                    need to give your landlord at least one month's notice. If it's a fixed term, your lease should say how much notice to
                    give (usually, 30–60 days before the lease term ends). [Tip: The more notice you can give, the more grateful your
                    landlord will likely be to you for the extra time to find new tenants.]</p>
            </div> </div>
        <div class="row main_div-row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 row_3"><p class="box_p">Now</p></div>
            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 row_4">
                <p class="box_p"><b>Set Aside Or Save Funds For A Security Deposit And First Month's Rent At New Rental Unit.</b> Set aside or save twice the anticipated monthly rental budget for your new unit—half for the first month's rent and half for the security
                    deposit.</p>
            </div> </div>
        <div class="row main_div-row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 row_3"><p class="box_p">Now</p></div>
            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 row_4">
                <p class="box_p"><b>Narrow Search, Request Walkthroughs Of Prospective New Rental Units.</b></p>
            </div> </div>
        <div class="row main_div-row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 row_3"><p class="box_p">Now</p></div>
            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 row_4">
                <p class="box_p"><b>Complete Rental Application(s) And Provide Any Accompanying Documents.</b></p>
            </div> </div>
        <div class="row main_div-row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 row_3"><p class="box_p">Now</p></div>
            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 row_4">
                <p class="box_p"><b>Sign Lease For New Rental Unit.</b> Security deposit for new unit will be due at this time.</p>
            </div> </div>
        <div class="row main_div-row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 row_3"><p class="box_p">30–90 Days Before</p></div>
            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 row_4">
                <p class="box_p"><b>Inform Prior LL In Writing You'll Be Moving.</b> Send written notice to Prior LL at the address and in the manner set forth
                    in your lease. Request a walkthrough of your current rental unit, and provide a new mailing address to which Prior LL can mail your security deposit and/or an itemized list of deductions. The Security Deposit Toolkit provides instructions
                    on actions you can take now to increase the odds of recovering your security deposit in full.<br><br>[Sample notice letters available as part of Security Deposit Toolkit, available for purchase <a href="{{route('buyNow')}}" target="blank">here</a>.]</p>
            </div> </div>
        <div class="row main_div-row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 row_3"><p class="box_p">30–60 Days Before</p></div>
            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 row_4">
                <p class="box_p"><b>Rent A Pod Or Moving Truck And Hire A Moving Company.</b> Visit <a href="https://www.move.org/best-moving-container-
companies/" target="blank"> https://www.move.org/best-moving-container-
                        companies/</a> for moving options.</p>
            </div> </div>
        <div class="row main_div-row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 row_3"><p class="box_p">30–60 Days Before</p></div>
            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 row_4">
                <p class="box_p"><b>Notify Your Utility Companies You'll Be Moving.</b> This includes gas and electric, garbage and recycling, water and
                    sewage, Internet/cable/telephone service. Some companies may allow you to transfer your service to a new address.</p>
            </div> </div>
        <div class="row main_div-row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 row_3"><p class="box_p">0–60 Days Before</p></div>
            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 row_4">
                <p class="box_p"><b>Obtain Renters Insurance For New Unit/Notify Your Current Renters Insurance Broker Of Change Of Address.</b> For the best renter's insurance companies of 2019, visit <a href="https://www.valuepenguin.com/" target="blank">https://www.valuepenguin.com/best-renters-insurance-companies.</a></p>
            </div> </div>
        <div class="row main_div-row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 row_3"><p class="box_p">7–14 Days Before</p></div>
            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 row_4">
                <p class="box_p"><b>Perform A Walkthrough Of Your Current Rental Unit With Prior LL.</b> Prior LL is required to perform a walkthrough if
                    you request it and must provide a written list of items in need of repair. If you wait until most of your items have been
                    packed, Prior LL will be able to view as much of the rental unit as possible. The Security Deposit Toolkit includes
                    instructions on preemptive actions to take to increase the odds of recovering your full security deposit.</p>
            </div> </div>
        <div class="row main_div-row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 row_3"><p class="box_p">0–14 Days Before</p></div>
            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 row_4">
                <p class="box_p"><b>(If Applicable) Arrange For Carpets To Be Steam-Cleaned.</b> You are required to return your current rental unit to the
                    Prior LL in exact condition in which you found it. If the rugs were steam cleaned at the time you moved in, plan on
                    having them steam cleaned before you move.</p>
            </div> </div>
        <div class="row main_div-row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 row_3"><p class="box_p">0–14 Days Before</p></div>
            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 row_4">
                <p class="box_p"><b>Perform Any Repairs Following The Walkthrough.</b> Prior LL is required to perform a walkthrough if you request it and
                    must provide you with a written list of items in need of repair. You can perform these repairs yourself or hire someone to do so. Again, the Security Deposit Toolkit includes instructions on preemptive actions to increase the odds of recovering your security deposit in full.</p>
            </div> </div>
        <div class="row main_div-row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 row_3"><p class="box_p">0–14 Days Before</p></div>
            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 row_4">
                <p class="box_p"><b>Set Up Mail Forwarding With USPS.</b> For mail forwarding, visit <a href="https://www.usps.com/manage/forward.htm" target="blank">https://www.usps.com/manage/forward.htm.</a></p>
            </div> </div>
        <div class="row main_div-row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 row_3"><p class="box_p">0–7 Days Before</p></div>
            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 row_4">
                <p class="box_p"><b>Perform A Walkthrough Of Your New Rental Unit With Your New Landlord ("New LL") And Request A Written Copy
                        Of The Inspection.</b> This is important so that you and New LL agree to the condition of the rental unit when you moved<br>
                    in. A best practice is to take pictures and have someone else present with you. This will increase the odds of getting
                    your security deposit back when you eventually move out. Follow up with New LL in writing (i.e., text or email)
                    summarizing the condition as observed in the walkthrough and send copies of relevant photos. This creates a written<br>
                    record in case New LL fails to timely complete the repairs.</p>
            </div> </div>
        <div class="row main_div-row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 row_3"><p class="box_p">ASAP After</p></div>
            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 row_4">
                <p class="box_p"><b>Update Your Physical Address.</b> Here is a non-exhaustive list of companies, entities, and general areas where you'll
                    need to update your address:</p>
                <ul class="box-ul1">
                    <li>
                        DMV (driver's license),
                    </li>
                    <li>
                        Banks and credit card companies,
                    </li>
                    <li>
                        Delivery services (including fresh produce, newspaper, magazines, etc.),
                    </li>
                    <li>
                        Social media,
                    </li>
                    <li>
                        Online accounts (e.g., iTunes, PayPal, Walgreens, Safeway, Banana Republic, Gap),
                    </li>
                    <li>
                        Alumni associations,
                    </li>
                    <li>
                        Student loan providers,
                    </li>
                    <li>
                        Wireless telephone providers,
                    </li>
                    <li>
                        Insurance providers (home, health, dental, vision, auto, renters),
                    </li>
                    <li>
                        Investment/retirement,
                    </li>
                    <li>
                        Benefit providers, and
                    </li>
                    <li>
                        Professional associations.
                    </li>
                    <li>
                        Your employer
                    </li>
                    <li>
                        Friends & Family
                    </li>
                </ul>

            </div> </div>
        <div class="row main_div-row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 row_3"><p class="box_p">ASAP After</p></div>
            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 row_4">
                <p class="box_p"><b>Notify New LL Of Any Item Requiring Repairs.</b> Put your requests in writing and request a date by which you'd like the
                    repairs completed. [Free sample letter available for download <a href="{{asset('site/files/Sample Letter to Landlord Requesting Repairs.docx')}}">here</a>.]</p>
            </div> </div>
        <div class="row main_div-row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 row_3"><p class="box_p">21 Days After</p></div>
            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9 row_4">
                <p class="box_p"><b>Follow Up With Prior LL If Security Deposit To Prior Unit Or Itemized List Of Deductions Not Yet Received.</b> Your
                    landlord has twenty-one days from the date you moved out to return your security deposit and/or an itemized list of
                    deductions to your security deposit with any receipts. If your landlord failed to return your security deposit or failed to provide an itemized list of deductions, get help with the Security Deposit Toolkit, available for purchase <a href="{{route('buyNow')}}" target="blank">here</a>.</p>
            </div> </div>
    </div>

    @include('site.registeration-popup.subscription-modal')
@endsection
