<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class AdminLoginMiddleware
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
        if (Auth::check()&& Auth::user()->u_roles ==1){
                return $next($request);
        }
        else{
            return redirect('error')->with(['flash_message'=>'Bạn không có quyền truy cập']);
        }
    }
}
