<?php

namespace Baxruzismailov\Filemanager\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class FileManagerMiddleware
{

    public function handle(Request $request, Closure $next)
    {

        return $next($request);
    }
}
