<?php

namespace app\middleware;

use think\facade\Session;
use think\response\Redirect;

class Auth
{
    public function handle($request, \Closure $next)
    {
        if(!Session::has("token")){

        $request->Login= 'false';
        return $next($request);
    }


}}