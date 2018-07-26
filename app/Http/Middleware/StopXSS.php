<?php

namespace App\Http\Middleware;

use Closure;

class StopXSS
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        $vetor[] = $request->all();
        foreach($request->all() as $nome=>$value){
            $vetor[$nome] = strip_tags($value);
        }
        $request->merge($vetor);
        
        return $next($request);
    }
}
