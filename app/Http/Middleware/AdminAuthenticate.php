<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminAuthenticate extends Middleware
{
    public function handle($request, Closure $next, ...$guards)
    {
        Log::debug('AdminAuthenticate Middleware: Executing');

        if (Auth::guard('admin')->check()) {
            Log::debug('AdminAuthenticate Middleware: Admin user is authenticated');
            return $next($request);
        } else {
            Log::debug('AdminAuthenticate Middleware: Admin user is not authenticated');
            return redirect()->route('admin.login'); // Replace 'admin.login' with your admin login route
        }
    }
}
