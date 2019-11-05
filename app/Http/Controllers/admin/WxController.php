<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WxController extends Controller
{
    public function index(){
        return view('wx/index');
    }
}
