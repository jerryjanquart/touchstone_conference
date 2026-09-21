<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureLivestreamAccess
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->session()->get('livestream_authenticated') !== true) {
        return redirect()->guest(route('livestream.login'));
    }

    return $next($request);
    }
}