<?php

namespace App\Http\Controllers\Site;

use App\Services\UserServices;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Mail;

class UserController extends Controller
{
    //

    public function register(Request $request)
    {

        $this->validate($request,[
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);


        $user = User::create($request->except('_token','password')+['password'=>Hash::make($request->password)]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
//            if(Auth::user()->is_paid == 0)
//            {
//                return response()->json(['result' => 'success','message'=>'Register Successfully.','url'=>route('showForm')], 200);
//            }
//            else{
                return response()->json(['result' => 'success','message'=>'Register Successfully.'], 200);
//            }
            // Authentication passed...

        }
        else{
            return response()->json(['result' => 'error','message'=>'Error came. Please try again.'], 200);
        }

    }


    public function login(Request $request)
    {
        $this->validate($request,[
            'email' => ['required','email',],
            'password' => ['required', 'min:8'],
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
//            if(Auth::user()->is_paid == 0)
//            {
//                return response()->json(['result' => 'success','message'=>'Login Successfully.','url'=>route('showForm')], 200);
//            }
//            else{
                return response()->json(['result' => 'success','message'=>'Your login was successful.'], 200);
//            }
        }
        else{
            return response()->json(['result' => 'error','message'=>'Email or Password is incorrect.'], 200);
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function forgetPassword(Request $request, UserServices $userServices)
    {
        $this->validate($request,[
           'email' => 'email|required'
        ]);

        $forgetPassword = $userServices->send_email($request);

        if($forgetPassword == 'true') {
            return response()->json(['result' => 'success', 'message' => 'We just emailed a link to reset your password.'], 200);
        }
        else {
            return response()->json(['result' => 'error', 'message' => 'Email doest not exitst!'], 200);
        }
    }

    public function resetPassword($token, UserServices $userServices)
    {
        $reset = $userServices->resetPassword($token);

        if($reset == 'true')
        {
//            return view('site.forget_password.change_password');
            return redirect()->route('home')->with(['openChangePasswordModal'=>'change-password-modal']);
        }
        elseif($reset == 'false_not_req')
        {
            return redirect()->route('home')->with(['error'=>'This user does not request for password change.',
                'openForgetPasswordModal'=>'forget-password-modal']);
        }
        else{
            return redirect()->route('home')->with(['error'=>'Your token has been expired. Please request again.','openForgetPasswordModal'=>'forget-password-modal']);
        }
    }

    public function changePassword(Request $request, UserServices $userServices)
    {
        $customMsg = ['email.required'=>'Email is a required field',
            'email.email'=>'Please enter a valid email address',
            'password.required'=>'Password is a required field',
            'password.min'=>'Password min length is 6',
            'password.confirmed'=>'Password is mismatched'];

        $this->validate($request,[
            'email'=>'required|email',
            'password' => 'required|min:8|confirmed',
        ],$customMsg);

        $changePass = $userServices->changePassword($request);

        if($changePass == 'true')
        {
            return response()->json(['result'=>'success','message'=>'Password successfully changed.'],200);
        }
        else{
            return response()->json(['result'=>'error','message'=>'Email is not found in database.'],200);
        }
    }



}
