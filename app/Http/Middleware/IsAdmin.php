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

        if($request->session()->get('email') !== 'root@yahoo.fr'){
            return redirect(route('admin.index'));
        }

        return $next($request);
    }
}
