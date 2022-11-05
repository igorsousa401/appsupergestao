<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $metodo_autenticacao, $perfil)
    {
        // Verificando acesso a rota
        echo $metodo_autenticacao."-".$perfil."<br>";


        if($metodo_autenticacao == 'padrao'){
            echo "Verificar login e senha no banco de dados!<br>";
        }
        if($metodo_autenticacao == 'ldap'){
            echo "Verificar dados da autenticacao!<br>";
        }

        if($perfil == 'visitante'){
            echo "Acesso Restrito a usuários cadastrados!<br>";
        }
        if($perfil == 'usuario'){
            echo "Acesso autorizado!<br>";
        }
        
        if(false) {
            return $next($request);
        } else {
            return response('Acesso Negado! Realize a autenticação.');
        }
        
    }
}
