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
        $password = bcrypt('sudoroot');
        if($request->session()->get('email_or_phone') !== 'root@yahoo.fr' && $request->session()->get('password') !== $password){
            return redirect(route('admin.index'));
        }

        return $next($request);
    }
}
