<?php

namespace App\Http\Middleware;

use Closure;

class DashboardGuest
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
        if (auth()->guard('admin')->check()) {
            return redirect()->back();
        }
        return $next($request);
    }
}