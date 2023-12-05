<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsLogged
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $this->authenticated();
        if ($user) {
            // var_dump($router->current());
            // return true;
            return $next($request);
        }
        return redirect("login");
    }

    private function authenticated(){
        session_start();
        if(!isset($_SESSION['user'])){
            return false;
        }
        return true;
    }
}
