<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 5/15/2019
 * Time: 11:37 AM
 */

namespace App\Services;


use App\PasswordReset;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserServices
{
    public function resetPassword($token)
    {
        $data = PasswordReset::where('token','=',$token)->first();

        if($data) {
            PasswordReset::where('token','=',$token)->delete();
            return 'true';
        }
        else{
            return 'false';
        }
    }

    public function send_email($request)
    {
        $confirmation_code = str_random(30);
        $user = User::where('email', '=' ,$request["email"])->first();
        if($user)
        {
            PasswordReset::insert(['email'=>$request->email,
                'token'=>$confirmation_code]);

            $user->password_change_req = 1;
            $user->save();

            $url = url( '/reset/password/'.$confirmation_code);

            $to = $request->email;
            $subject = "Password Change Request";
            $txt = '<table bgcolor="#FFFFFF" align="center" border="0" cellpadding="10" cellspacing="0" width="600" style="border:1px solid #36a0d4;">';
            $txt .= '<tbody>';
            $txt .= '<tr style="background: #fff">';
            $txt .= '<td align="center" valign="top" style="padding:0px;">';
            $txt .= '<table border="0" cellpadding="0" cellspacing="0" width="600">';
            $txt .= '<tbody><tr>';
            $txt .= '<td align="center" valign="top">
                        <table style="padding: 100px 0;" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tbody>
                                <tr>
                                <td valign="top" align="center">
                                    <table cellpadding="0" cellspacing="0">
                                        <tbody>
                                        <tr align="center">
                                            <td style="width:100%" align="left">
                                                <a style="display: inline-block;" href="'.route('home').'">
                                                    <img width="200" alt="logo" src="'.asset('site/img/logo.png').'">
                                                </a>
                                            </td>

                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <table border="0" cellpadding="0" cellspacing="0" width="600">
                                        <tbody>
                                        <tr>
                                            <td align="center" valign="top" width="600">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                    <tbody>
                                                    <tr align="center">
                                                        <td style="padding:30px 40px 0px;">
                                                            <div style="padding:0px 0px 40px 0px;margin:0px;font-family:Lucida Grande,Lucida Sans,Lucida Sans Unicode,Arial,Helvetica,Verdana,sans-serif;line-height:25px;font-size:32px">
                                                                <span style="color:#000;font-family:Lucida Grande,Lucida Sans,Lucida Sans Unicode,Arial,Helvetica,Verdana,sans-serif;">Welcome!</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr align="center">
                                                        <td style="padding:0px 40px 0px;">
                                                            <div style="padding:0px 0px 25px 0px;margin:0px;font-family:Lucida Grande,Lucida Sans,Lucida Sans Unicode,Arial,Helvetica,Verdana,sans-serif;line-height:25px;font-size:14px">
                                                                <span style="color:#000;font-family:Lucida Grande,Lucida Sans,Lucida Sans Unicode,Arial,Helvetica,Verdana,sans-serif;">You have received this email because we received a request to reset the password for the account associated with this email address.</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr align="center">
                                                        <td style="padding:0px 40px 0px;">
                                                            <a style="background: #fea03c;display: inline-block;text-decoration:none;padding: 11px 20px;margin-bottom:25px;font-family:Lucida Grande,Lucida Sans,Lucida Sans Unicode,Arial,Helvetica,Verdana,sans-serif;font-size:14px;border: none;border-radius: 5px;color: #fff;cursor: pointer;" href="'.$url.'">Reset Password</a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>';
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: info@securitydeposittoolkit.com" . "\r\n" .
                "CC: info@securitydeposittoolkit.com";

            mail($to,$subject,$txt,$headers);

            return 'true';

        }
        else
        {
            return 'false';
        }
    }


    public function changePassword($request)
    {
        $user = User::where('email','=',$request->email)->first();

        if($user)
        {

            if($user->password_change_req == 1) {
                $user->password = Hash::make($request->password);
                $user->password_change_req = 0;
                if ($user->save()) {
                    return 'true';
                }
            }
            else{
                return 'false_not_req';
            }

        }
        else
        {
            return 'false';
        }

    }
}
