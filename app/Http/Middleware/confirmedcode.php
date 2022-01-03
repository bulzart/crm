<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class confirmedcode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
<<<<<<< HEAD
                     if(Auth::guard('admins')->check()){
            // if(Auth::guard('admins')->user()->confirmed == 0){
            //        return redirect()->route('smsconfirmation');
            // }else
            if(Auth::guard('admins')->user()->firsttime == 1){
                return redirect()->route('smsconfirm');
            }
            else{
                return $next($request);
            }
        }
        else{
=======
        if(Auth::guard('admins')->check()){
            if(Auth::guard('admins')->user()->confirmed == 0){
                   return redirect()->route('smsconfirmation');
            }else if(Auth::guard('admins')->user()->firsttime == 1){
                return redirect()->route('smsconfirm');
            }else{
                return $next($request);
            }
        }else{
>>>>>>> c7c3bbe8dc313c2ee71ba4a4b8de02b14a8b05c3
            return redirect()->route('rnlogin');
        }
            

    }
  
}
