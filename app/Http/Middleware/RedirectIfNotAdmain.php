<?php

namespace App\Http\Middleware;

use Closure;
use Laravel\Sanctum\Guard;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfNotAdmain
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }
    protected $auth;

    public function __construct(Guard $auth) {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next) {
        if (auth()->check()) {
            if (auth()->user()->role !='admin') {
                return redirect('dashboard/login');
            }
            return $next($request);
        }
        // return redirect('dashboard/login');
    }
}
