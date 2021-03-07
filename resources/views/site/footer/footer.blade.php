<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="data_fopter">
                    <a href="{{route('home')}}"><img src="{{asset('site/img/logo.png')}}" alt="logo" /></a>
                    <p class="log_text">
                        Helping California Renters Recover Residential Security Deposits Wrongfully Withheld by Landlords
                    </p>
                    <span class="text_follow">Follow Us</span>
                    <div class="footer-icons">
                        <a href="https://www.facebook.com/SDToolkit" target="blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/securitydeposittoolkit/" target="blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.twitter.com/SDToolkit" target="blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/company/security-deposit-toolkit" target="blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="data_fopter">
                    <!--<span class="span8">Link</span>-->
                    <ul class="footer_ul">
                        <li><a class="{{ (Request::route()->getName() == 'home') ? 'footer-active' : '' }}" href="{{route('home')}}">Home</a></li>
                        <li><a class="{{ (Request::route()->getName() == 'buyNow') ? 'footer-active' : '' }}" href="{{route('buyNow')}}">Buy Toolkit</a></li>
                        <li><a class="{{ (Request::route()->getName() == 'faq') ? 'footer-active' : '' }}" href="{{route('faq')}}">FAQs</a></li>
                        <li><a class="{{ (Request::route()->getName() == 'needMoreHelp') ? 'footer-active' : '' }}" href="{{route('needMoreHelp')}}">Need More Help?</a></li>
                        <li><a class="{{ (Request::route()->getName() == 'freeVideo') ? 'footer-active' : '' }}" href="{{route('freeVideo')}}">Free Videos</a></li>
                    </ul>
                    <ul class="footer_ul">
                        <li><a class="{{ (Request::route()->getName() == 'aboutUs') ? 'footer-active' : '' }}" href="{{route('aboutUs')}}">About & Mission</a></li>
                        <li><a class="{{ (Request::route()->getName() == 'contactUs') ? 'footer-active' : '' }}" href="{{route('contactUs')}}">Contact Us</a></li>
                        <li><a class="{{ (Request::route()->getName() == 'disclaimer') ? 'footer-active' : '' }}" href="{{route('disclaimer')}}">Disclaimer</a></li>
                        <li><a class="{{ (Request::route()->getName() == 'termsOfUse') ? 'footer-active' : '' }}" href="{{route('termsOfUse')}}">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col_margin">
                <div class="data_fopter1">
                    <!--<span class="text_address">Address</span>-->
                    <ul>
{{--                        <li>--}}
{{--                            <h5><span class="span3"><i class="fas fa-map-marker-alt"></i></span> Location</h5><p>649 Mission Street, 5th Floor<br>--}}
{{--                                San Francisco, CA 94105-4128</p>--}}
{{--                        </li>--}}
                        <!--<li>
                          <h5><span class="span3"><i class="fas fa-phone"></i></span> Phone</h5><p>+01(111 222 4444)</p>
                        </li>-->
                        <li>
                            <h5><span class="span3"><i class="far fa-envelope"></i></span> Email</h5><p><a href="mailto:info@mysecuritydeposit.com"> info@mysecuritydeposit.com</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
</footer>
<div class="fototer_div">
    <p class="text-center footer_text">&copy; 2019  Security Deposit Toolkit, Inc., a California Legal Publishing and Document Automation Company</p>
</div>
