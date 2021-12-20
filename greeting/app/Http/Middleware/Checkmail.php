<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Checkmail
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
        $email = $request->email;
//        dd($email);
        if(!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)) {
            return $next($request);
        }else{
            return redirect()->route("customers.create",['message' => 'mail không hợp lệ']);
        }
    }
}
