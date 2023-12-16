<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SubAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
          // Check if the user is authenticated
          if (Auth::check()) {
            // Check if the user has the "admin" role
            if (Auth::user()->role == 'admin' || Auth::user()->role == 'sub_admin') {
                // User has the "admin" role, proceed with the request
                return $next($request);
            }
        }

        // User is not authenticated or doesn't have the "admin" role
        // You can customize this part based on your requirements
        return redirect('/')->with('error', 'Unauthor');

    }
}
