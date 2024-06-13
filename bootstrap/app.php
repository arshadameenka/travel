<?php

use App\Http\Middleware\AdminRoleRedirection;
use App\Http\Middleware\UserRoleRedirection;
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
        $middleware->alias(['admindash'=>AdminRoleRedirection::class,'userdash'=>userRoleRedirection::class]);
        //$middleware->append([UserTypeRedirect::class,userRoleRedirection::class]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
