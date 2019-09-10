<?php

namespace App\Http\Middleware;

use Closure;

class AuthMerch
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
        //没有登录就跳转登录页面
        if(auth()->guard('merch')->guest()){
            return redirect('merch/login');
        }

        return $next($request);
    }
}
