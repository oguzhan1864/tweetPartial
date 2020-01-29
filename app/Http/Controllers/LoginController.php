<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function show() {
        return view('loginForm');
    }

    function checkLogin(Request $request) {
        $username = $request->username;
        $password = $request->password;
        $result = DB::select("SELECT * FROM tweetusers WHERE username='$username' AND password='$password'");
        if(sizeOf($result) ==1) {
            return view('loginGood');
        } else {
            return view('loginBad')
        }
    }
}
