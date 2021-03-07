<div class="modal" id="signout-modal">

    <div class="modal-dialog">
        <form method="get" action="{{route('logoutUser')}}">
            <div class="modal-content sign_outwidth">

                <!-- Modal Header -->
                <div class="modal-header sign_outborder">
                    <h4 class="modal-title sign_out">Sign Out</h4>
                    <button type="button" class="close" data-dismiss="modal">×</button>

                </div>

                <p class="sign_outp">Do you really wish to sign out <br>
                    of your account?</p>
                    <div class="row sign_out_row">
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 sign_outbutton">
                            <button><h1>Yes</h1></button>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 sign_outbutton">
                            <button type="button" data-dismiss="modal"><h1>No</h1></button>
                        </div>
                    </div>
            </div>
        </form>

    </div>


</div>

