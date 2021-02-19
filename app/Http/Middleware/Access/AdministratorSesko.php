<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use Auth;
use Closure;

class AdministratorSesko {
  public function handle(Request $request, Closure $next) {
    if( Auth::user()->accesses->description  == 'Administrator-Sesko') {
      return $next($request);
    }
    else {
      return redirect('/dashboard');
    }
  }
}
