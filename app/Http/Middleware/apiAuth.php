<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class apiAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(isset($_SERVER['PHP_AUTH_USER'])&&isset($_SERVER['PHP_AUTH_PW'])){
            if($_SERVER['PHP_AUTH_USER']=='abhishek'&&$_SERVER['PHP_AUTH_PW']=='12345678'){
                return $next($request);
            }else{
                return ['status'=>'0','message'=>'Authentication Fails!!'];
            }
        }else{
            return ['status'=>'0','message'=>'Authentication Fails!!'];
        }
        
        
    }
}
