<div class="modal fade" id="updatePasswordModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content modal-content2">

            <!-- Modal Header -->
            <div class="modal-header modal-header2">
                <h4 class="modal-title">Forgot Password</h4>
               <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <div class="success alert-success" style="display: none">

            </div>

            <div class="error-div alert-danger" style="display: none;">
                <ul class="validation_error">

                </ul>
            </div>

            <div class="error alert-danger" style="display:none;">
                @if(Session::has('error'))
                    {{Session::get('error')}}
                @endif

            </div>


            <form class="updatePasswordForm action_pa">
                @csrf
                <div class="form-group">
                    <label for="pwd">Email Address</label>
                    <input type="email" class="form-control"  placeholder="Enter Email Address" name="email" required>
                </div>

                <div class="form-group">
                    <label for="email">Password</label>
                    <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
                </div>



                <div class="form-group">
                    <label for="email">Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Enter Password Again" name="password_confirmation" required>
                </div>


                <div class="row mt-4">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 b_yes1">
                        <button type="button" class="b_yes updatePasswordBtn">
                            <h4>Confirm Password</h4>
                        </button>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 b_yes1">
                        <button type="button" class="b_yes cancelChangeBtn" data-dismiss="modal">
                            <h4>Cancel</h4>
                        </button>
                    </div>
                </div>
            </form>


        </div>
    </div>
</div>


