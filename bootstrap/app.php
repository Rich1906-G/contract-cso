<?php

use App\Http\Middleware\IsUser;
use App\Http\Middleware\IsAdmin;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->redirectGuestsTo('/login');
        $middleware->redirectUsersTo('/');

        $middleware->alias([
            'role' => App\Http\Middleware\CheckRole::class,
            'admin' => App\Http\Middleware\IsAdmin::class,
        ]);
        // $middleware->append(IsAdmin::class);
        // $middleware->append(IsUser::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
