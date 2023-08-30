<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;

class AuthController extends Controller
{





    public function create(){




        return Inertia::render('Auth/Login');

    }

    public function store(Request $request){

        $validateData= $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);

        $attempt =Auth::attempt($validateData,true);
        if(!$attempt){
            throw ValidationException::withMessages([
                'email'=>'Authentication Failed',
                'password'=>'Authentication Failed',
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended();

    }

    public function destroy(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->intended(route('login'));


    }




}
