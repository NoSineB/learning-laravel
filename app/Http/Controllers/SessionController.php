<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create(){
        return view('login.create');
    }

    public function store(Request $request){
        dd($request->all());
    }
}
