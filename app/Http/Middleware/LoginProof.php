<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use App\Http\Middleware\RedirectIfAuthenticated;
use Redirect;

class LoginProof
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
        if(\Cookie::has('UserName') && \Cookie::has('Token'))
        {
            $user=\Cookie::get('UserName');
            $token=\Cookie::get('Token');
            $thisuser=User::where(['UserName'=>$user,'Token'=>$token])->first();
            if(! is_null($thisuser)){
                \Session::put('UserName',$user);
                \Session::put('Login','True');
            }
        }
        if(\Session::get('Login')=="True")
        {
            return redirect('/Pannel');
        }
        return $next($request);
    }
}
