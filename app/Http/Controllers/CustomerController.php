<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function showCustomerHome()
    {
        return view('customer.customerHome');
    }
public function getServiceHome(){
        return view('customer.getServiceHome');
}
public  function ecommerce(){
        return view('customer.epartsForCustomer');
}

}
