<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ValidUser
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->role == "admin") {
            return $next($request);
        }
        else{
            return redirect()->route('login');
        }
        
    }
}
