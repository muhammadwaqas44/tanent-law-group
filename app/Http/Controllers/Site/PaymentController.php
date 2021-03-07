<?php

namespace App\Http\Controllers\Site;

use App\Services\PaymentServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    //
    public function showForm()
    {
        if(Auth::user()->is_paid == 1)
        {
           return redirect()->route('account-info');
        }

        return view('site.dashboard.account.create-payment');
    }
    public function createPayment(Request $request,PaymentServices $paymentServices)
    {
        return $paymentServices->makePayment($request);

    }
    public function information()
    {
        return view('site.dashboard.account.account-info');
    }
}
