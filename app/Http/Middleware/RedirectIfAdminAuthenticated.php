<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAdminAuthenticated
{
    
    public function handle($request, Closure $next, $guard = null)
    {
        $auth=Auth::guard('admins');
        if ($auth->check()) {
            return redirect('/admin');
        }

        return $next($request);
    }
}
