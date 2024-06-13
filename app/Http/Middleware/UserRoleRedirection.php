<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class UserRoleRedirection
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) 
        {
                return redirect()->route('login');
        }
       
            $userType = Auth::user()->userTypes->user_type; // Assuming 'usertype' is stored in the user model

            if ($userType === 'user') {
                return $next($request);
            }
            if ($userType === 'admin') {
                return redirect()->route('dashboard');
            }
        
       
    }
}
