<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 5/16/2019
 * Time: 4:48 PM
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PaidUserCheck
{
    public function handle($request, Closure $next)
    {
        if(Auth::user()->is_paid == 1)
        {
            return $next($request);
        }
        else{
            return redirect()->route('account')->with('payment_error');
        }

    }
}