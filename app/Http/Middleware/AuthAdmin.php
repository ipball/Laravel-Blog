<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check()) {
            return $next($request);
        } else {
            auth()->logout();
            session()->invalidate();
            session()->regenerateToken();
            return redirect('login')->with('message', __('auth.failed'));
        }
    }
}
