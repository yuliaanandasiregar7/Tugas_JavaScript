<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagenotContrller extends Controller
{
    //
    public function index(){
        return view('admin.pagenot');
    }
}

