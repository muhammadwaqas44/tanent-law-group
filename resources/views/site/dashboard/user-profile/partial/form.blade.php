<div class="col-sm-12 order-first order-lg-9 col-md-12 col-lg-9 col-xl-9 body_white1">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="prfl_inside2">
                <div class="edit_profile"><h3>Edit Profile</h3></div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
            <div class="prfl_inside3">


                <form id="payment_form" method="post" action="{{route('update-profile')}}">
                    @csrf
                    <div class="form-row">
                        @if(Session::has('error'))
                            <div class="error alert-danger">
                                {{Session::get('error')}}
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if(Session::has('success'))
                            <div class="success alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif


                        <div class="form-group col-md-12">
                            <label for="inputEmail4">First Name:</label>
                            <input type="text" class="form-control" placeholder="Enter Updated First Name"  name="first_name" value="{{Auth::user()->first_name}}" onkeypress="return isCharacterKey(event)">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Last Name:</label>
                            <input type="text" class="form-control" placeholder="Enter Updated Last Name" name="last_name" value="{{Auth::user()->last_name}}" onkeypress="return isCharacterKey(event)">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Email Address:</label>
                            <input type="email" class="form-control" placeholder="Enter Updated Email Address" name="email" value="{{Auth::user()->email}}">
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary">Update Profile</button>
                    <button type="button" class="btn btn-primary cancel_btn">Cancel</button>
                </form>



            </div>
        </div>
    </div>

</div>
