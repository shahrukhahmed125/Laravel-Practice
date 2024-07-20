<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ScoutMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if the user is not authenticated or not an scout then redirect them to login page

        if(\Auth::check() || Auth::user()->role = 'scout')
        {
            return $next($request);
        }
        else
        {
            // otherwise proceed with the requset
            return redirect()->route('login');

        }
    }
}
