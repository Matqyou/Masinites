<?php

namespace App\Http\Middleware;

use Closure;

class ContentSecurityPolicy
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Define your CSP directives here
        $csp = "default-src 'self';
                script-src 'self' https://ajax.googleapis.com;
                style-src 'self' 'unsafe-inline';
                img-src 'self' data:;
                connect-src 'self';
                frame-src 'self';";

        $response->headers->set('Content-Security-Policy', $csp);

        return $response;
    }
}
