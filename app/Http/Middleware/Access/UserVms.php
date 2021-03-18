<?php

namespace App\Http\Middleware\Access;
use Illuminate\Http\Request;
use Auth;
use Closure;

class UserVms {
  public function handle(Request $request, Closure $next) {
    if( Auth::user()->accesses->description  == 'User-VMS') {
      return $next($request);
    }
    else {
      return redirect('/dashboard');
    }
  }
}
