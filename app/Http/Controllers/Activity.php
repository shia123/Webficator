<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Activity extends Controller
{
    //

    public function output(Request $request) {

        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $a=0;

        while ($a <= 10) {

            $output = $num1 + $num2;
            $a+1;
            return view('exam.output',compact('output'));
            
        
        }

       



        



    }
    
}
