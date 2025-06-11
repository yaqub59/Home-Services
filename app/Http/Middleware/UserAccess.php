<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $userType): Response
    {
       
        if (!auth()->check()) {
            return response()->json(['message' => 'Not authenticated user.'], 401);
        }

        if (strtolower(auth()->user()->type) == strtolower($userType)) {
            return $next($request);
        }

        return response()->json(['message' => 'You do not have permission to access for this page.'], 403);
    }
}
