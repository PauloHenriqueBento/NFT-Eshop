<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class adminAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //Verifica se o usuário é verificado e tem acesso admin
        if(auth()->user()->isAdmin()){
            return $next($request);
        } else {
            dd(Auth()->user()->admin);
            //dd("Acesso negado, você não é admin");
        }
    }
}
