<?php

namespace App\Http\Middleware;
use App\ManualAuth\ManualGuard;

use Closure;

class MyManualAuthMieddleware
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
        $ManualGuard = new ManualGuard();
        if ($ManualGuard->check()){
            return $next($request);

        }
        dd("BBB");
        return redirect('login');
    }

}
