<?php

namespace App\Http\Middleware;

use Closure;
use App\Enums\UserRole;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param $request
     * @param Closure $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check())
        {
            if(Auth::user()->role->type === UserRole::USER) {
                return redirect(locale_route('home.index'));
            }
            else return redirect(locale_route('login'));
        }

        return $next($request);
    }
}