<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{


    public function create(Request $request){
        return view("login");
    }
    public function login(Request $request){
        $validatedData = $request->validate([
            "email"=> "required|string|exists:users,email",
            "password"=> "required"
        ]);

         if( Auth::attempt($validatedData)){
            return redirect("/dashboard")->with("success","Login Successfull");
         }else{
          return redirect()->back()->with("error" , "Password is invalid")  ;
          
         }
 
    }
    }
