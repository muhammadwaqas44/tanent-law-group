<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content modal-content2">

            <!-- Modal Header -->
            <div class="modal-header modal-header2">
                <h4 class="modal-title text-center">Create Account</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <div class="success alert-success" style="display: none">

            </div>

            <div class="error-div alert-danger" style="display: none;">
                <ul class="validation_error">

                </ul>
            </div>

            <div class="error alert-danger" style="display:none;">

            </div>

            <form class="signupForm action_pa">
                @csrf

                <div class="form-group">
                    <label for="pwd">First Name</label>
                    <input type="text" class="form-control" placeholder="Enter First Name" name="first_name" required>
                </div>

                <div class="form-group">
                    <label for="pwd">Last Name</label>
                    <input type="text" class="form-control" placeholder="Enter Last Name" name="last_name" required>
                </div>


                <div class="form-group">
                    <label for="pwd">Email</label>
                    <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password</label>
                    <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 b_yes1">
                        <button type="button" class="b_yes signupBtn">
                            <h4>Create account</h4>
                        </button>
                    </div>

                </div>
            </form>
            <div class="form-group">
                Already have an account? Login <a  class="loginPageBtn" href="javascript:void(0)" data-toggle="modal" data-target="#loginModal">here</a>
            </div>

        </div>


    </div>



</div>


