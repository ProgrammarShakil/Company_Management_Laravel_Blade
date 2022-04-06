<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
   public function index(){
       return view('Backend.pages.settings.site_settings.index2');
   }
}
