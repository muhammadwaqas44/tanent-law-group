<div class="modal" id="user-change-password-modal">

    <div class="modal-dialog">

        <div class="modal-content modal-content2">

            <!-- Modal Header -->
            <div class="modal-header modal-header2">
                <h4 class="modal-title">Change Password</h4>
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
            
            <form class="userUpdatePasswordForm action_pa">
                @csrf
                <div class="form-group">
                    <label for="pwd">Current Password:</label>
                        <input type="password" class="form-control" placeholder="Enter Current Password" name="old_password" required>
                </div>
                <div class="form-group">
                    <label for="pwd">New Password:</label>
                    <input type="password" class="form-control" placeholder="Enter New Password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Confirm New Password:</label>
                    <input type="password" class="form-control" placeholder="Confirm New Password" name="password_confirmation" required>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 b_yes1">
                        <button type="button" class="b_yes userUpdatePasswordBtn">
                            <h4>Replace</h4>
                        </button>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 b_yes1">
                        <button class="b_yes cancelBtn" type="button" data-dismiss="modal">
                            <h4>Cancel</h4>
                        </button>
                    </div>
                </div>
            </form>

        </div>


    </div>
</div>


