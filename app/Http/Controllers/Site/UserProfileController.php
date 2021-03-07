<?php

namespace App\Http\Controllers\Site;

use App\Services\ProfileUpdateServices;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{
    //
    public function editProfile()
    {
        return view('site.dashboard.user-profile.edit-profile');
    }

    public function updateProfile(Request $request, ProfileUpdateServices $profileUpdateServices)
    {
        $this->validate($request,[
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email'
        ]);

        return $profileUpdateServices->updateProfile($request);
    }

    public function updatePassword(Request $request, ProfileUpdateServices $profileUpdateServices)
    {

        $this->validate($request,[
            'password' => ['required', 'min:8', 'confirmed'],
            'old_password'=>'required',
        ]);

        return $profileUpdateServices->updatePassword($request);


    }
}
