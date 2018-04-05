<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    /**
      MIDDLEWARE->FOR VERIFING THE USER OF MY APP IS AUTHENTICATED.
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       
      //     if (auth::check() && auth::user()->isAdmin()) {
      //          // return $next($request);
      //       return route('dashboard');
      //     }
      // else{
      //      return route('login');
      // }

        //check if user is authenticated by using check method and the method isAdmin to identify if is admin or else.
        
 if ( Auth::check() && Auth::user()->isAdmin() )
        {
            return $next($request);
        }

    else{
          return redirect('home');
       }

}
