<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }


    public function create()
    {
        return view('auth.login');
    }

    public function store () 
    {
        if(!auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ])) {
            return back()->withErrors([
                'message' => 'Pleas check you credentials.'
            ]);
        } 

        if(auth()->user()->is_verified) {
            return redirect()->route('teams.index');
        } else {
            $this->destroy();
            
            return back()->withErrors([
                'message' => 'You are not verified, please check your email for verification!'
            ]);
        }
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/login');
    }
}
