<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
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

        $data = [
            ['name'=>'taro', 'mail'=>'taro@hogehoge.com', 'url'=>'google.com'],
            ['name'=>'hanako', 'mail'=>'hanako@hogehoge.com', 'url'=>'google.com'],
            ['name'=>'yamada', 'mail'=>'yamada@hogehoge.com', 'url'=>'google.com'],
        ];
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}
