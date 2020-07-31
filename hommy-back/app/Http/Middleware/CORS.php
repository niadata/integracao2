<?php

namespace App\Http\Middleware;

use Closure;

class CORS
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
        $resposta = $next($request);
        //add os headers a ela
        $resposta->header('Acess-Control-Allow-Origin', '*');
        $resposta->header('Acess-Control-Allow-Methods', 'GET, POST, PUT DELETE, OPTIONS');
        $resposta->header('Acess-Control-Allow-Headers', 'Authorization, Content-Type');
        //retorna resposta
        return $resposta;
    }
}
