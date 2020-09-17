<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\URL;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle($request, Closure $next)
    // {
    //     app()->setLocale($request->segment(1));

    //     // Added this to don't need to use app()->getLocale() in all routes {{ route('login', app()->getLocale()) }}, now we can simple {{route('login')}}
    //     Url::defaults(['locale' => $request->segment(1)]);

    //     // $request->route()->forgetParameter('locale');

    //     return $next($request);
    // }
}
