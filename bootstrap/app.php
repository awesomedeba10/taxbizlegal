<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Middleware\MaintenanceMode;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web(append: [
            MaintenanceMode::class,
        ]);

        $middleware->redirectGuestsTo(function (Request $request) {
            if (Str::startsWith($request->path() , config('app.admin_url_prefix'))):
                return route('front.home');
            endif;

            return route('login');
        });
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
