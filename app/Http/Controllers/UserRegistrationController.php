<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRegistrationController extends Controller
{
    public function create(){
        return view('register.create');
    }

    public function store(Request $request){
        dd($request->all());
    }
}
