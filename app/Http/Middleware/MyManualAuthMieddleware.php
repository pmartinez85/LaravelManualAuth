<?php

namespace App\Http\Middleware;
use App\ManualAuth\ManualByIdParameter;
use App\ManualAuth\ManualGuard;

use Closure;

class MyManualAuthMieddleware
{

    protected $manualGuard;

    /**
     * MyManualAuthMieddleware constructor.
     * @param $manualGuard
     */
    public function __construct(Guard $manualGuard)
    {
        $this->manualGuard = $manualGuard;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       // $ManualGuard = new ManualGuard();
        if ($this->manualGuard->check()){
            return $next($request);

        }
        return redirect('login');
    }

}
