<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        using:function (Illuminate\Routing\Router $router) {
            $router->middleware('web')
              ->group (base_path('routes/auth.php'));
            $router->middleware('web')
              ->group (base_path('routes/web.php'));
              $router->middleware('web')
              ->group (base_path('routes/elec.php'));
        },
        // web: __DIR__.'/../routes/web.php',
        // api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
