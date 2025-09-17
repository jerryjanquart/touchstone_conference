<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginpage() 
    {
        return view('login');
    }


    public function login(Request $request) { //$request is the incoming fields

        // validate
        $incomingFields = $request->validate([ 
            'name' => 'required',
            'password' => 'required'
        ]);

        // attempt login
        if (auth()->attempt($incomingFields)) { 
            $request->session()->regenerate(); //initiates laravel cookie when successful
            return redirect('/livestream')->with('success', 'You have succussfully logged in.');
        } else { 
            return back()->with('error', 'Login Fail. Please try again.');
        }
    }


    public function logout() {
        auth()->logout();
        return redirect('/login')->with('success', 'You are now logged out.');
    }
    

}
