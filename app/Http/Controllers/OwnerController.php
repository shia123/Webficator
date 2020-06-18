<?php

namespace App\Http\Controllers;

use App\User;
use App\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    //
    
    protected $redirectTo = 'webcontent/home';


    public function __construct()
    {   
        $this->middleware('owner');
        
    }
    
    public function dashboard(){

        return view('owner.owner');
        
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/webcontent/home');
        
    }
}
