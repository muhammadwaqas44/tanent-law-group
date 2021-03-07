<?php

namespace App\Http\Controllers\Site;

use App\Services\ContactUsService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{
    //
    public function sendEmail(Request $request, ContactUsService $contactUsService)
    {
        return $contactUsService->send_email($request);
    }
}
