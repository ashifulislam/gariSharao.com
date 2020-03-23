<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:customer');
    }
    public function showCustomerHome(){
      return view('customer.customerHome');
    }



}
