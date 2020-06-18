<?php

namespace App\Http\Controllers;

use App\Role;
use App\Users;

use Gate;
use Illuminate\Auth\Access\Gate as AccessGate;
use Illuminate\Support\Facades\Gate as FacadesGate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\sendMail;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
 

    /**
     * Show the application dashboard.
     *
     * 
     */
    
    
    protected function validatedData(){

      return request()->validate([
          'username'=>'required',
          'password'=>'required'
      ]);
   }

    public function index()
    {
        return view('home');
    }

    public function sendMail(Request $request){

      

  

      $details = [
        'body' => $request->input('message'),
        'email' =>'My Email is:' .$request->input('email'),
        'contact' => 'My Contact Number:' .$request->input('contact')
      ];

      Mail::to('sharmainedlion@gmail.com')->send(new sendMail($details));
  
      return view('webcontent/home');

    }
    public function checkUser(Request $request)
    {
      $this->validatedData();
      $request->session()->put('user',$this->validatedData());
      $output = $request->session()->get('user',$this->validatedData());
      
      $user = Users::with('roles')
              ->where('username',$output['username'])
              ->where('password',$output['password'])
              ->first();

      
       if(!empty($user)){
         if($user->roleId==1)
         {
          
          $request->session()->put('session',$user);
          $session =  $request->session()->get('session',$user);
          return response()->json(['user'=>$user,'session',$session],200);
         }
         else if($user->roleId==2){
          
          $request->session()->put('session',$user);
          $session =  $request->session()->get('session',$user);
          return response()->json(['user'=>$user,'session',$session],200);
        }
        else if($user->roleId==3){
          
          $request->session()->put('session',$user);
          $session =  $request->session()->get('session',$user);
          return response()->json(['user'=>$user,'session',$session],200);
        }

       }
       else{

          return response()->json('Invalid Credentials',200);
        
       }
      
      // $this->validatedData();
      // $user = Users::where('username',$request->input('username'))->get();
      
      // if($user[0]->username ==$request->input('username') && $user[0]->password ==$request->input('password') ) 
      // {
      //     if($user[0]->roleId == 1){
      //        dd('owner');
      //     }
      //     else if ($user[0]->roleId == 2){
      //       dd('sec');
      //     }
      // }
      // else
      // {
      //   dd('false');
      // }

    
      
    
      
     
       
    }

}
