<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DecodeAdminQueryString
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->has('payload')) {
            $payload = custom_decrypt($request->query('payload'));

            if (is_array($payload)) {
                $request->merge($payload);
                $request->query->add($payload);
            }
        }

        return $next($request);
    }
}
