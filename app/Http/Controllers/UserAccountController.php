<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserAccountController extends Controller
{



    public function create(){




        return inertia('Auth/Register');

    }


    public function store(Request $request){


        $validateData = $request->validate([
            'name'=>'required|min:2',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|confirmed',
        ]);


        $credentials=$request->validate([
            'email'=>'required|email|unique:users',
            'password'=>'required',
        ]);


        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'created_at'=>Carbon::now(),
        ]);


        $attempt =Auth::attempt($credentials,true);
        if(!$attempt){
            throw ValidationException::withMessages([
                'email'=>'Authentication Failed',
                'password'=>'Authentication Failed',
            ]);
        }

        $request->session()->regenerate();

        return redirect()->intended();




    }



}
