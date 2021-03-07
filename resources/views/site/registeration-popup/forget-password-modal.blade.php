<div class="modal fade" id="forgetPasswordModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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


            <form class="forgetPasswordForm action_pa">
                @csrf
                <div class="form-group">
                    <label for="pwd">Email Address</label>
                    <input type="email" class="form-control"  placeholder="Enter Email Address" name="email" required>
                </div>

                <div class="row mt-4">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 b_yes1">
                        <button type="button" class="b_yes forgetPasswordBtn">
                            <h4>Forgot Password</h4>
                        </button>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 b_yes1">
                        <button type="button" class="b_yes" data-dismiss="modal">
                            <h4>Cancel</h4>
                        </button>
                    </div>
                </div>
            </form>



    {{--<div class="modal-dialog modal-sm" role="document">--}}
        {{--<div class="modal-content">--}}
            {{--<div class="modal-header">--}}
                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                    {{--<span aria-hidden="true">&times;</span>--}}
                {{--</button>--}}
                {{--<h4 class="modal-title" id="myModalLabel">Forget Password</h4>--}}

            {{--</div>--}}
            {{--<div class="modal-body">--}}

                {{--@if(Session::has('error'))--}}
                    {{--<p style="color: red">{{Session::get('error')}}</p>--}}
                {{--@endif--}}

                {{--<form class="pb-modalreglog-form-reg forgetPasswordForm">--}}
                    {{--@csrf--}}


                    {{--<div class="form-group">--}}
                        {{--<label for="email">Email address</label>--}}
                        {{--<div class="input-group pb-modalreglog-input-group">--}}
                            {{--<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>--}}
                            {{--<input type="email" class="form-control" placeholder="Email" name="email">--}}
                        {{--</div>--}}
                    {{--</div>--}}


                {{--</form>--}}

            {{--</div>--}}
            {{--<div class="modal-footer">--}}
                {{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
                {{--<button type="button" class="btn btn-primary forgetPasswordBtn">Forget Password</button>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
        </div>
    </div>
</div>

