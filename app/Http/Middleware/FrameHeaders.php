<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FrameHeaders
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Tambahkan header anti-clickjacking
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');
        $response->headers->set('X-Content-Type-Options', 'nosniff');

        return $response;
    }
}
