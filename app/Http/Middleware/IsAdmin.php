<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        dd($response);
        if($request->get('email_or_phone') === 'root@yahoo.fr'){
            return redirect(route('admin-lock'));
        }

        return $response;
    }
}
