<?php

namespace App\Http\Controllers\Site;

use App\Letter;
use App\Services\LetterService;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PdfController extends Controller
{

    public function save_letter_1a(Request $request,LetterService $letterService)
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

        $letter = $letterService->saveLetter1($request);

        if($letter  != 'error')
        {
            return response()->json(['result'=>'success','data'=>$letter,'url'=>
                route('export_letter1a',['id'=>$letter])]);
        }
        else{
            return response()->json(['result'=>'error','message'=>'Error came in saving Letter']);
        }


    }

    public function export_letter_1a($id)
    {
        $letter = Letter::find($id);
        if($letter)
        {
            $data = unserialize($letter->json_data);
//            dd($data);

            $type = $letter->type;
            $pdf = PDF::loadView('site.dashboard.pdf.mainLayout', ['data' => $data,'type'=>$type,'created_at'=>$letter->created_at]);
            return $pdf->stream('Notice of Termination of Tenancy Not Due to Any Issue with the Landlord, Rental Unit, or Tenancy.pdf');
        }

    }

    public function save_letter_1b(Request $request,LetterService $letterService)
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


        $letter = $letterService->saveLetter1b($request);

        if($letter  != 'error')
        {
            return response()->json(['result'=>'success','data'=>$letter,'url'=>
                route('export_letter1b',['id'=>$letter])]);
        }
        else{
            return response()->json(['result'=>'error','message'=>'Error came in saving Letter']);
        }


    }

    public function export_letter_1b($id)
    {
        $letter = Letter::find($id);
        if($letter)
        {
            $type = $letter->type;

            $data = unserialize($letter->json_data);
            $pdf = PDF::loadView('site.dashboard.pdf.mainLayout', ['data' => $data,'type'=>$type,'created_at'=>$letter->created_at]);
            return $pdf->stream('Notice of Termination of Tenancy Due to One or More Issues with the Landlord, Rental Unit, or Tenancy.pdf');
        }

    }

    public function save_letter_2(Request $request,LetterService $letterService)
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

        $letter = $letterService->saveLetter2($request);

        if($letter  != 'error')
        {
            return response()->json(['result'=>'success','data'=>$letter,'url'=>
                route('export_letter2',['id'=>$letter])]);
        }
        else{
            return response()->json(['result'=>'error','message'=>'Error came in saving Letter']);
        }


    }

    public function export_letter_2($id)
    {
        $letter = Letter::find($id);
        if($letter)
        {
            $data = unserialize($letter->json_data);
            $type = $letter->type;
            $pdf = PDF::loadView('site.dashboard.pdf.mainLayout', ['data' => $data,'type'=>$type,'created_at'=>$letter->created_at]);
            return $pdf->stream('Letter to Landlord Requesting Return of Security Deposit.pdf');
        }

    }

    public function save_request_repairs(Request $request,LetterService $letterService)
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

        $letter = $letterService->saveRequestingRepairLetter($request);

        if($letter  != 'error')
        {
            return response()->json(['result'=>'success','data'=>$letter,'url'=>
                route('export_request_repairs',['id'=>$letter])]);
        }
        else{
            return response()->json(['result'=>'error','message'=>'Error came in saving Letter']);
        }


    }

    public function export_request_repairs($id)
    {
        $letter = Letter::find($id);
        if($letter)
        {
            $data = unserialize($letter->json_data);
            $type = $letter->type;
            $pdf = PDF::loadView('site.dashboard.pdf.mainLayout', ['data' => $data,'type'=>$type,'created_at'=>$letter->created_at]);
            return $pdf->stream('Letter to Landlord Requesting Repairs.pdf');
        }

    }

    public function judgementLetter(Request $request,LetterService $letterService)
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

        $letter = $letterService->postJudgementLetter($request);

        if($letter  != 'error')
        {
            return response()->json(['result'=>'success','data'=>$letter,'url'=>
                route('export_judgement_letter',['id'=>$letter])]);
        }
        else{
            return response()->json(['result'=>'error','message'=>'Error came in saving Letter']);
        }
    }

    public function exportJudgementLetter($id)
    {
        $letter = Letter::find($id);
        if($letter)
        {
            $data = unserialize($letter->json_data);
            $type = $letter->type;
            $pdf = PDF::loadView('site.dashboard.pdf.mainLayout', ['data' => $data,'type'=>$type,'created_at'=>$letter->created_at]);
            return $pdf->stream('Post-Judgment Letter to Landlord.pdf');
        }

    }

}
