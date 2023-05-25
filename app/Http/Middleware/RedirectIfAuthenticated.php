<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

      
        foreach ($guards as $guard) {
            if($guard == 'admin' && Auth::guard($guard)->check()){
                dd(Auth::user());                
                return redirect(RouteServiceProvider::SUPER_ADMIN_HOME);
            }
            if (Auth::guard($guard)->check() && Auth::user()->status == 1) {
                return redirect(RouteServiceProvider::HOME);
            }else{
                return redirect(RouteServiceProvider::PROFILE_UPDATE);
            }
        }
        return $next($request);
    }
}
