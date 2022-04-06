<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendDashboardContoller extends Controller
{
    public function index(){

        return view('Frontend.dashboard.index');
    }
}
