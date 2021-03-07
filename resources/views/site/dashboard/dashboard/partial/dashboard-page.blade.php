<div class="col-sm-12 order-first order-lg-9 col-md-12 col-lg-9 col-xl-9 body_white1">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="d-box-f">

                        <h2>{{count(Auth::user()->letter)}}</h2>
                        <h3>Total Documents Created</h3>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="d-box-t">
                        <a class="dashboard_btn_anchor" href="{{route('account')}}">
                        @if(Auth::user()->is_paid != 0)
                        <h2>${{Auth::user()->payment->price}}</h2>
                        @else
                            <h2>$0</h2>
                        @endif
                        <h3>Purchase Now</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
            <div class="prfl_inside3">
                <h3 class="content-heading">Documents Listing</h3>
                <div class="d-content d-content-active">

                       <a href="{{route('letter-1a')}}">
                           <p>Notice of Termination of Tenancy Not Due to Any Issue with the Landlord, Rental Unit, or Tenancy</p>
                       </a>
                    <a href="{{route('letter-1b')}}">
                        <p>
                            Notice of Termination of Tenancy Due to One or More Issues with the Landlord, Rental Unit, or Tenancy
                        </p>
                    </a>


                    <a href="{{route('letter-2')}}">
                        <p>
                            Letter to Landlord Requesting Return of Security Deposit
                        </p>
                    </a>

                    <a href="{{route('request_repairs')}}">
                        <p>
                            Letter to Landlord Requesting Repairs
                        </p>
                    </a>

                </div>



            </div>
        </div>
    </div>


</div>
