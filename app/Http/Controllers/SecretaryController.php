<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecretaryController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('sec');
    }

    public function dashboard(){

        return view('secretary.secretary');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/webcontent/home');
        
    }
}
