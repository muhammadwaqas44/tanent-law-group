<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 5/27/2019
 * Time: 1:17 PM
 */

namespace App\Services;


use App\Letter;
use Illuminate\Support\Facades\Auth;

class LetterService
{

    public function saveLetter1($request)
    {

        if ($request->letter1 == '') {
            $letter = Letter::create(['type' => 'Notice of Termination of Tenancy Not Due to Any Issue with the Landlord, Rental Unit, or Tenancy', 'user_id' => Auth::user()->id,
                'json_data' => serialize($request->except('_token'))]);

            $form_id = $letter->id;
        } else {
            $letter = Letter::where('id', '=', $request->letter1)->update(['type' => 'Notice of Termination of Tenancy Not Due to Any Issue with the Landlord, Rental Unit, or Tenancy', 'user_id' => Auth::user()->id,
                'json_data' => serialize($request->except('_token', 'letter1'))]);

            $form_id = $request->letter1;
        }
        if ($letter) {
            return $form_id;
        } else {
            return 'error';
        }
    }

    public function saveLetter1b($request)
    {

        if ($request->letter1b == '') {
            $letter = Letter::create(['type' => 'Notice of Termination of Tenancy Due to One or More Issues with the Landlord, Rental Unit, or Tenancy', 'user_id' => Auth::user()->id,
                'json_data' => serialize($request->except('_token'))]);
            $form_id = $letter->id;
        } else {
            $letter = Letter::where('id', '=', $request->letter1b)->update(['type' => 'Notice of Termination of Tenancy Due to One or More Issues with the Landlord, Rental Unit, or Tenancy', 'user_id' => Auth::user()->id,
                'json_data' => serialize($request->except('_token', 'letter1b'))]);
            $form_id = $request->letter1b;
        }
        if ($letter) {
            return $form_id;
        } else {
            return 'error';
        }
    }

    public function saveLetter2($request)
    {

        if ($request->letter2 == '') {
            $letter = Letter::create(['type' => 'Letter to Landlord Requesting Return of Security Deposit', 'user_id' => Auth::user()->id,
                'json_data' => serialize($request->except('_token'))]);
            $form_id = $letter->id;
        } else {
            $letter = Letter::where('id', '=', $request->letter2)->update(['type' => 'Letter to Landlord Requesting Return of Security Deposit', 'user_id' => Auth::user()->id,
                'json_data' => serialize($request->except('_token'))]);
            $form_id = $request->letter2;
        }
        if ($letter) {
            return $form_id;
        } else {
            return 'error';
        }
    }

    public function saveRequestingRepairLetter($request)
    {

        if ($request->requesting_repair == '') {
            $letter = Letter::create(['type' => 'Letter to Landlord Requesting Repairs', 'user_id' => Auth::user()->id,
                'json_data' => serialize($request->except('_token'))]);
            $form_id = $letter->id;
        } else {
            $letter = Letter::where('id', '=', $request->requesting_repair)->update(['type' => 'Letter to Landlord Requesting Repairs', 'user_id' => Auth::user()->id,
                'json_data' => serialize($request->except('_token'))]);
            $form_id = $request->requesting_repair;
        }
        if ($letter) {
            return $form_id;
        } else {
            return 'error';
        }
    }

    public function postJudgementLetter($request)
    {

        if ($request->judgement_letter == '') {
            $letter = Letter::create(['type' => 'Post-Judgment Letter to Landlord', 'user_id' => Auth::user()->id,
                'json_data' => serialize($request->except('_token'))]);

            $form_id = $letter->id;
        } else {
            $letter = Letter::where('id', '=', $request->judgement_letter)
                ->update(['type' => 'Post-Judgment Letter to Landlord', 'user_id' => Auth::user()->id,
                    'json_data' => serialize($request->except('_token', 'judgement_letter'))]);

            $form_id = $request->judgement_letter;
        }
        if ($letter) {
            return $form_id;
        } else {
            return 'error';
        }
    }

}
