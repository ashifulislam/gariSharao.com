<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutoMobileEngineer extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:autoMobileEngineer');
    }
    public function showCustomerHome()
    {
        return view('autoMobileEngineer.autoMobileEngineerHome');
    }
}
