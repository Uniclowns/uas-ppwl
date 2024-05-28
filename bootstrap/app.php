<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // $middleware->add('role', \Spatie\Permission\Middleware\RoleMiddleware::class);
        // $middleware->add('permission', \Spatie\Permission\Middleware\PermissionMiddleware::class);
        // $middleware->add('role_or_permission', \Spatie\Permission\Middleware\RoleOrPermissionMiddleware::class);
        // $middleware->add('preventBackHistory', \App\Http\Middleware\PreventBackHistory::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
