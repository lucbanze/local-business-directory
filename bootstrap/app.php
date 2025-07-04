<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Routing\Middleware\ThrottleRequests;

return Application::configure(basePath: dirname(__DIR__))

    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    // ->withMiddleware(function (Middleware $middleware): void {
    //     $middleware->append(EnsureFrontendRequestsAreStateful::class);
    //     $middleware->append(SubstituteBindings::class);
    //     $middleware->append(ThrottleRequests::class.':api');
    // })
    ->withMiddleware(function (Middleware $middleware): void {
        // Configuration minimale - Laravel gère automatiquement
    })

    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
