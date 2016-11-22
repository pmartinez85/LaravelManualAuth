<?php

namespace App\Http\Middleware;

use App\ManualAuth\Guard;
use Closure;

/**
 * Class MyManualAuthMieddleware
 * @package App\Http\Middleware
 */
class MyManualAuthMieddleware
{
    protected $manualGuard;

    /**
     * MyManualAuthMieddleware constructor.
     *
     * @param $manualGuard
     */
    public function __construct(Guard $manualGuard)
    {
        $this->manualGuard = $manualGuard;
    }

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->manualGuard->check()) {
            return $next($request);
        }

        return redirect('login');
    }
}
