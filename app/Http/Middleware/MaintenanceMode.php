<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Config;

class MaintenanceMode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    private $maintenance_mode;

    public  function __construct()
    {
        $this->maintenance_mode = (bool) Config::get('app.maintenance.mode', false) ;
    }

    public function handle(Request $request, Closure $next): Response
    {
        if ($this->maintenance_mode && !$request->session()->has('has_maintenance_access')) {
            if ($request->routeIs('maintenance') || $request->routeIs('maintenance.access')) {
                return $next($request);
            }
            return redirect()->route('maintenance');
        }

        return $next($request);
    }
}
