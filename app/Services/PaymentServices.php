<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 5/15/2019
 * Time: 11:37 AM
 */

namespace App\Services;


use App\Coupon;
use App\PasswordReset;
use App\Payment;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Stripe\Charge;
use Stripe\Stripe;

class PaymentServices
{

    public function makePayment($request)
    {
        Stripe::setApiKey(env("STRIPE_KEY"));

        $actualPrice = 79;

//        $amount = (79*100);

        if($request->coupon_code)
        {
            $coupon = Coupon::where('coupon_name',$request->coupon_code)->first();
			if($coupon){
				if($coupon->off)
				{
					$discount = ($actualPrice * $coupon->off)/100;
					$finalAmount = $actualPrice - $discount;
					$amount = round($finalAmount*100,0);

				}
			} else {
				return response()->json(['result' => 'error', 'message' => 'Coupon not found.'], 200);
			}
        }
        else{
            $finalAmount = $actualPrice;
            $amount = ($finalAmount*100);
        }
        if($amount > 0) {
            try {

                $charge = Charge::create(array(
                    "amount" => $amount,
                    "currency" => "usd",
                    "source" => $request->stripeToken,//"tok_180T94GgflXsah1fmPZggNo1",
                ));
            } catch (\Stripe\Error\InvalidRequest $e) {
                return response()->json(['result' => 'error', 'message' => $e->getMessage()], 200);
            } catch (\Stripe\Error\Authentication $e) {
                return response()->json(['result' => 'error', 'message' => $e->getMessage()], 200);
            } catch (\Stripe\Error\ApiConnection $e) {
                return response()->json(['result' => 'error', 'message' => $e->getMessage()], 200);
            }
        }
        User::where('id',Auth::user()->id)->update(['is_paid'=>1]);

        if($amount > 0) {
            Payment::create(['user_id' => Auth::user()->id, 'transaction_id' => $charge->id, 'price' => $amount, 'subs_start_date' => Carbon::now()]);
        }
        else{
            Payment::create(['user_id' => Auth::user()->id, 'transaction_id' => 'Free', 'price' => $amount, 'subs_start_date' => Carbon::now()]);
        }
        $request->session()->flash('thankYou','thankYouModal');

        return response()->json(['result'=>'success','message'=>'You successfully paid.'],200);

    }

}
