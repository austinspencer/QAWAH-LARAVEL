<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

use Closure;



class vue_authentication extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        if ($this->authenticate($request, $guards) === 'authentication_error') {
            return response()->json(['error'=>'Unauthorized']);
        }
        return $next($request);
    }
    protected function authenticate($request, array $guards)
    {
        if (empty($guards)) {
            $guards = [null];
        }
        foreach ($guards as $guard) {
            if ($this->auth->guard($guard)->check()) {
                return $this->auth->shouldUse($guard);
            }
        }
        return 'authentication_error';
    }
}
