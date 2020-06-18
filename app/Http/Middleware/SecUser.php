<?php

namespace App\Http\Middleware;

use App\Users;
use Closure;

class SecUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      $role = $request->session()->get('session.roleId');
      

      if($role == 2)
      {
        
        return $next($request);

      }
      else {

        return redirect('webcontent/home');

      }

        
      //   $username = $request->session()->get('user.username');
      //   $password = $request->session()->get('user.password');
      //    $user = Users::with('roles')
      //    ->where('username',$username)
      //    ->where('password',$password)
      //    ->first();
        
         
      //  if(!empty($user)){

      //   if($user->roleId==2)
      //   {
      //       return $next($request);
        
      //   }
      //   else{

      //       return redirect('webcontent/home');
      //   }
        
      

      // }
      // else{

      //   return redirect('webcontent/home');
       
      // }
    }
}
