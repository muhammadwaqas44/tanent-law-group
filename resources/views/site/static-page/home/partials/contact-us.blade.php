<div class="container">
    <div class="contactus_text">
        <p class="text-center">C<span class="span6">ontact U</span>s</p>
    </div>
    <span class="text_dumy">
     Questions?  Comments?  We’d love to hear from you!
     </span>
    <form method="post" action="{{route('sendContactEmail')}}">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group form_icon">
                    <input type="Name*" class="form-control" placeholder="Name*" name="name" required>
                    <span class="icons"><i class="fas fa-user"></i></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form_icon">
                    <input type="Phone*" class="form-control"  placeholder="Phone*" name="phone" required>
                    <span class="icons"><i class="fas fa-phone-volume"></i></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form_icon">
                    <input type="email" class="form-control" placeholder="Email Address*" name="email" required>
                    <span class="icons"><i class="far fa-envelope"></i></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form_icon">
                    <input type="text" class="form-control" placeholder="Subject*" name="subject" required>
                    <span class="icons"><i class="fas fa-pencil-alt"></i></span>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group form_icon">
                    <textarea class="form-control" placeholder="Message*" name="message" required></textarea>
                    <span class="icons"><i class="far fa-comment"></i></span>

                </div>
                <div class="submit_form">
                    <button type="submit" class="btn btn-default btn-defaul">Submit Now</button>
                </div>

            </div>
        </div>

    </form>
</div>
