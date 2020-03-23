<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public  function ecommerce(){
        return view('customer.epartsForCustomer');
    }
}
