<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:superAdmin');
    }
    public function showSuperAdmin(){
        return view('superAdmin.superAdminHome');
    }

}
