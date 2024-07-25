<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request){
        // dd($request->all());
        // exit;
        User::create($request->all());
        return redirect('/')->with('register', 'Register Success!');
    }
    public function login(){
            
    }
}
