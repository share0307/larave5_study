<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Response;

class TestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->input('number') < 100){
            $server = Request::server();
//            return Response::json($server);
        }

        return $next($request);
    }

    //可终止中间件
    public function terminate($request, $response)
    {
        // Store the session data...
        return 'sacdsv';
    }
}
