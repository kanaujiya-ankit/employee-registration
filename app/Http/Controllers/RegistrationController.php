<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Hash;
use DB;
use Auth;

class RegistrationController extends Controller
{
    public function login(){
        return view('login');
    }

    public function checklogin(Request $Request){

        
        $this->validate($Request, [
            'email'    => 'required|email',
            'password' => 'required|min:8'
        ]);

        $email = $Request->input('email');
        $password = $Request->input('password');

        
 

    }

    public function registration(){
        return view('signup');
    }

    public function store(Request $Request)
    {
         # validate input
         $validatedData = $Request->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8'],
        ]);

         # get input
         $first_name = $Request->input('first_name');
         $last_name = $Request->input('last_name');
         $email = $Request->input('email');
         $password = $Request->input('password');
 
         
         # insert param
        $user = DB::table('user')->insert([
            "first_name" => $first_name,
            "last_name" => $last_name,
            "email" => $email,
            "password" => Hash::make($password)
        ]);

         if($user) {
             
             return redirect('')->with('success','Account created successfully');
         }else{
             return redirect()->back()->with('danger','Invalid Credentials for login');
         }

    }



}
