<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">


    <div class="modal-dialog">

        <div class="modal-content modal-content2">

            <!-- Modal Header -->
            <div class="modal-header modal-header2">
                <h4 class="modal-title">LOGIN</h4>
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

            <form class="loginForm action_pa">
                @csrf
                <div class="form-group">
                    <label for="pwd">Email Address</label>
                    <input type="email" class="form-control" placeholder="Enter Email Address" name="email" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password</label>
                    <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
                </div>


                <div class="row mt-4">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 b_yes1">
                        <button type="button" class="b_yes loginBtn">
                            <h4>Login</h4>
                        </button>
                    </div>

                </div>
            </form>
            <div class="form-group">
            Don't have an account yet ? Create one <a href="javascript:void(0)" data-toggle="modal" data-target="#signupModal" class="signupPageBtn">here.</a>
            </div>

            <div class="form-group">
                <a href="javascript:void(0)" data-toggle="modal" data-target="#forgetPasswordModal" class="forgetPasswordPageBtn">Forgot Password</a>
            </div>

        </div>


    </div>



</div>


