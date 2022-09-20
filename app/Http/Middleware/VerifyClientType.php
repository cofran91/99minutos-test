<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyClientType
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
        $user = auth()->user();
        if($user->rol_id != 3 && $user->rol_id != 1){
            return response()->json([
                'message' => 'Accesso no autorizado, para contar con este servicio comuniquese con la compañia'
            ], 401);
        }

        return $next($request);
    }
}
