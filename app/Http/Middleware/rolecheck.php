<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class rolecheck { /** * Handle an incoming request. */ public function handle(Request $request,Closure $next): Response { if (!Auth::check()) { return redirect()->route('adduser'); } if (Auth::user()->role != 'admin') { return redirect()->route('bookshows'); } return $next($request); } }

