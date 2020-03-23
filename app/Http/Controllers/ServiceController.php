<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function getServiceHome(){
        return view('customer.getServiceHome');
    }
}
