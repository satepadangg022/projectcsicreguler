<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ClickjackingProtection
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Tambahkan header anti-clickjacking
        $response->headers->set('X-Frame-Options', 'DENY');
        $response->headers->set('Content-Security-Policy', "frame-ancestors 'self';");

        return $response;
    }
}