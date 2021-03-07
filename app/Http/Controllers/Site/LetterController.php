<?php

namespace App\Http\Controllers\Site;

use App\Letter;
use App\Services\LetterService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LetterController extends Controller
{

    public function getLetter(Request $request)
    {
        if($request->letter_name == 'letter-1a')
        {
            return redirect()->route('letter-1a');
        }
        elseif($request->letter_name == 'letter-1b')
        {
            return redirect()->route('letter-1b');
        }
        elseif($request->letter_name == 'letter-2')
        {
            return redirect()->route('letter-2');
        }
        elseif($request->letter_name == 'requesting-repair')
        {
            return redirect()->route('request_repairs');
        }
        elseif($request->letter_name == 'judgement-letter')
        {
            return redirect()->route('judgement_letter');
        }
        else{
            return redirect()->back();
        }
    }
    //
    public function letter_1a()
    {
        return view('site.dashboard.letters.letter-1a');
    }

    public function post_letter1(Request $request,LetterService $letterService)
    {
        $this->validate($request,[
            'landlord_first_name' => 'required',
            'landlord_last_name' => 'required',
            'street_address' => 'required',
            'city'=>'required',
            'state'=>'required',
            'zip'=>'required',
            'landlord_email'=>'nullable|email',
            'full_address'=>'required',

            'first_name'=>'required',
            'last_name'=>'required',
            'move_out_date'=>'required',
            'security_deposit'=>'required',
            'email'=>'required|email',
            'phone_number'=>'required',
            'address'=>'required'
        ]);

        $letter1 = $letterService->saveLetter1($request);
        if($letter1 !='error')
        {
            return response()->json(['result'=>'success','message'=>'Save Successful.']);
        }
    }


    public function letter_1b()
    {
        return view('site.dashboard.letters.letter-1b');
    }

    public function post_letter1b(Request $request,LetterService $letterService)
    {
        $this->validate($request,[
            'landlord_first_name' => 'required',
            'landlord_last_name' => 'required',
            'street_address' => 'required',
            'city'=>'required',
            'state'=>'required',
            'zip'=>'required',
            'landlord_email'=>'nullable|email',
            'full_address'=>'required',
            'sickness_condition'=>'required',
//            'issues'=>'required_without_all',

            'first_name'=>'required',
            'last_name'=>'required',
            'move_out_date'=>'required',
            'security_deposit'=>'required',
            'email'=>'required|email',
            'phone_number'=>'required',
            'address'=>'required'
        ]);
        $letter1b = $letterService->saveLetter1b($request);
        if($letter1b !='error')
        {
            return response()->json(['result'=>'success','message'=>'Save Successful.']);
        }
        else{
            return response()->json(['result'=>'error','message'=>'Error occur.Please Try again.']);
        }
    }

    public function letter_2()
    {
        return view('site.dashboard.letters.letter-2');
    }

    public function post_letter2(Request $request,LetterService $letterService)
    {
        $this->validate($request,[
            'landlord_first_name' => 'required',
            'landlord_last_name' => 'required',
            'street_address' => 'required',
            'city'=>'required',
            'state'=>'required',
            'zip'=>'required',
            'landlord_email'=>'nullable|email',
            'full_address'=>'required',


            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'phone_number'=>'required',
            'rental_unit_move_date'=>'required',
            'security_deposit'=>'required',
            'hold_security_deposit'=>'required',
            'toolkit_amount'=>'required',
            'letter_send_date'=>'required',
            'address'=>'required'
        ]);


        $letter2 = $letterService->saveLetter2($request);
        if($letter2 !='error')
        {
            return response()->json(['result'=>'success','message'=>'Save Successful.']);
        }
        else{
            return response()->json(['result'=>'error','message'=>'Error occur.Please Try again.']);
        }
    }

    public function request_repair()
    {
        return view('site.dashboard.letters.requesting-repairs');
    }

    public function post_request_repair(Request $request,LetterService $letterService)
    {
        $this->validate($request,[
            'landlord_first_name' => 'required',
            'landlord_last_name' => 'required',
            'street_address' => 'required',
            'city'=>'required',
            'state'=>'required',
            'zip'=>'required',
            'landlord_email'=>'nullable|email',
            'full_address'=>'required',

            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'phone_number'=>'required',
            'repair_last_date'=>'required',
            'repair_items.*'=>'required',

        ]);

        $letterRepair = $letterService->saveRequestingRepairLetter($request);
        if($letterRepair !='error')
        {
            return response()->json(['result'=>'success','message'=>'Save Successful.']);
        }
        else{
            return response()->json(['result'=>'error','message'=>'Error occur.Please Try again.']);
        }
    }

    public function letterListing(Request $request)
    {
        $letters = Letter::where('user_id','=',Auth::user()->id)->paginate(10);
        return view('site.dashboard.letters.listing',compact('letters'));
    }


    public function judgementLetter()
    {
        return view('site.dashboard.letters.judgement-letter');
    }

    public function postJudgementLetter(Request $request,LetterService $letterService)
    {
        $this->validate($request,[
            'landlord_first_name' => 'required',
            'landlord_last_name' => 'required',
            'street_address' => 'required',
            'city'=>'required',
            'state'=>'required',
            'zip'=>'required',
            'landlord_email'=>'nullable|email',
            'full_address'=>'required',
            'country'=>'required',

            'first_name'=>'required',
            'last_name'=>'required',
            'check_amount'=>'required',
            'email'=>'required|email',
            'phone_number'=>'required',
            'amount_send_date'=>'required',
            'address'=>'required',
            'case_number'=>'required'
        ]);

        $letter1 = $letterService->postJudgementLetter($request);
        if($letter1 !='error')
        {
            return response()->json(['result'=>'success','message'=>'Save Successful.']);
        }
    }


}
