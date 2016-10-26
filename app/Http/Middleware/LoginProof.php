<?php

namespace App\Http\Middleware;

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
        if(\Session::get('Login')=="True")
        {
            return redirect('/Pannel');
        }
        return $next($request);
    }
}
