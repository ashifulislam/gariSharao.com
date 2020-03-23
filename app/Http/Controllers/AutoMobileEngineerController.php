<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutoMobileEngineerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:autoMobileEngineer');
    }
    public function showAutoMobileEngineer()
    {
        return view('autoMobileEngineer.autoMobileEngineerHome');
    }
}
