<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(){
        return view('login.create');
    }

    public function store(Request $request){

        $attributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        $auth_attempt = Auth::attempt($attributes);

        if(! $auth_attempt){
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        request()->session()->regenerate();

        return redirect('/jobs');
    }

    public function destroy(){
        Auth::logout();
        return redirect('/');
    }
}
