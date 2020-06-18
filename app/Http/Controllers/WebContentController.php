<?php

namespace App\Http\Controllers;

use App\WebContent;
use Illuminate\Http\Request;

class WebContentController extends Controller
{
    //

    public function webContent(){

        $webcontents = WebContent::get();
         return view('homepage.home')->with('webcontents',$webcontents);



    }
}
