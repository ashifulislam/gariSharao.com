<?php

namespace App\Http\Controllers\AutoMobileEngineer;
use App\AutoMobileEngineer;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Customer;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    public function showRegForm()
    {
        return view('autoMobileEngineer.register');
    }
    public function register(Request $request){

        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);

        $addAutoMobileEngineer=new AutoMobileEngineer();




        $addAutoMobileEngineer->name=$request->input('name');
        $addAutoMobileEngineer->email=$request->input('email');
        $addAutoMobileEngineer->password=bcrypt($request->input('password'));





        $addAutoMobileEngineer->save();
        return redirect('autoMobileEngineer/login');

    }
}
