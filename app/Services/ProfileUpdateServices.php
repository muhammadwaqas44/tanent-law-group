<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 5/23/2019
 * Time: 2:06 PM
 */

namespace App\Services;


use App\User;
use Illuminate\Support\Facades\Auth;

class ProfileUpdateServices
{

    public function updateProfile($request)
    {
        $user = User::find(Auth::user()->id);
        if($user)
        {
            if($user->update($request->except('_token'))){

                return redirect()->back()->with('success','Profile Updated Successfully.');
            }
            else{
                return redirect()->back()->with('success','Some error came. Try again later.');
            }

        }
        else{
            return redirect()->back()->withErrors('User not found.');
        }
    }


    public function updatePassword($request)
    {
        if(Hash::check($request->old_password,Auth::user()->password))
        {
            if($request->old_password != $request->password)
            {
                if(Auth::user()->update(['password'=>Hash::make($request->password)]))
                {
                    return response()->json(['result'=>'success','message'=>'Password updated successfully.']);

                }
                else{
                    return response()->json(['result'=>'error','message'=>'Error in updating password.Try again later.']);

                }
            }
            else{
                return response()->json(['result'=>'error','message'=>'New Password cannot be same as Old Password.']);
            }
        }
        else{
            return response()->json(['result'=>'error','message'=>'Old Password is incorrect.']);
        }
    }

}