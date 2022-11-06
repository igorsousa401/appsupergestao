<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Psy\CodeCleaner\IssetPass;

class LoginController extends Controller
{
    public function index(Request $request) {

        $erro = '';

        if($request->get('erro') == 1) {
            $erro = 'Usuário/Senha inválidos.';
        }

        if($request->get('erro') == 2) {
            $erro = 'Necessário realizar login para acessar a página.';
        }

        return view('site.login', compact('erro'));
    }

    public function autenticar(Request $request) {
        
        $regras = [
            'email' => 'email',
            'senha' => 'required',
        ];

        $feedback = [
            'email.email' => 'Insira um e-mail válido.',
            'senha.required' => 'O campo Senha precisa ser preenchido.',
        ];

        $request->validate($regras, $feedback);

        $user = new User();

        $user = $user->where('email', $request->email)->where('password', $request->senha)->get()->first();

        if(Isset($user->email)) {
            
            session_start();
            $_SESSION['nome'] = $user->name;
            $_SESSION['email'] = $user->email;

            return redirect()->route('app.home');
        } else{
            return redirect()->route('site.login', ['erro' => 1]);
        }
    }

    public function logout() {
        session_destroy();

        return redirect()->route('site.index');
    }
}
