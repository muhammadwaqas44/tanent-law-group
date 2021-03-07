<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 5/17/2019
 * Time: 1:09 PM
 */

namespace App\Services;


class ContactUsService
{

    public function send_email($request)
    {
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;
        $phone = $request->phone;

//        $url = url( '//'.$confirm);

        $to = 'info@securitydeposittoolkit.com';
        $subject = $subject;
        $txt = '<table bgcolor="#FFFFFF" align="center" border="0" cellpadding="10" cellspacing="0" width="600" style="border:1px solid #36a0d4;">';
        $txt .= '<tbody>';
        $txt .= '<tr style="background: #36a0d4">';
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
                                                                <span style="color:#fff;font-family:Lucida Grande,Lucida Sans,Lucida Sans Unicode,Arial,Helvetica,Verdana,sans-serif;">Welcome!</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr align="center">
                                                        <td style="padding:0px 40px 0px;">
                                                            <div style="padding:0px 0px 25px 0px;margin:0px;font-family:Lucida Grande,Lucida Sans,Lucida Sans Unicode,Arial,Helvetica,Verdana,sans-serif;line-height:25px;font-size:14px">
                                                                <span style="color:#fff;font-family:Lucida Grande,Lucida Sans,Lucida Sans Unicode,Arial,Helvetica,Verdana,sans-serif;">'.$message.'</span>
                                                            </div>
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
        $headers .= "From: " .$email. "\r\n" ;

        mail($to,$subject,$txt,$headers);

        return redirect()->back();

    }
}