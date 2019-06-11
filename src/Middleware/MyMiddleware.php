<?php

namespace App\Middleware;

use Slim\Http\Request;
use Slim\Http\Response;

class MyMiddleware
{
    public function __invoke(Request $request, Response $response, callable $next)
    {
        // get args from url
        //$request->getAttribute('routeInfo')[2];

        //add sleep before controller
        //sleep(5);

        return $next($request, $response);
    }
}
