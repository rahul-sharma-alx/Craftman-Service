<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class EnsureAdminIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        // Check if the user is authenticated and has the admin role
        if (!$user || !$user->hasRole('admin')) {
            // If not, return a 403 Forbidden response
            return response()->json(['error' => 'Unauthorized. Admin access only.'], 403);
            //return redirect()->route('login');
        }

        return $next($request);
    }
}
