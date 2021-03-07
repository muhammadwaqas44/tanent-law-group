<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function index()
    {
        return view('site.dashboard.dashboard.index');
    }

    public function video()
    {
        return view('site.dashboard.videos.video');
    }

    public function document()
    {
        return view('site.dashboard.document.document');
    }
}
