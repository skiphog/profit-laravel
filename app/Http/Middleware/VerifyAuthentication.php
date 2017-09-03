<?php

namespace App\Http\Middleware;

use Closure;

class VerifyAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$this->checkAuth($request)) {
            abort(401, 'Unauthorized.');
        }

        return $next($request);
    }

    /**
     * @param  \Illuminate\Http\Request $request
     * @return bool
     */
    private function checkAuth($request): bool
    {
        return $request->header('X-UserName') === config('profit.x_user_name')
            &&
            $request->header('X-Password') === hash('gost', config('profit.x_password'));
    }
}
