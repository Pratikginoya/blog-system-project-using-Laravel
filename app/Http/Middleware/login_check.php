<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class login_check
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $req, Closure $next)
    {
        if($req->session()->get('user_login'))
        {
            return $next($req);
        }
        return redirect('/login');    
    }
}
