<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        
        return view('app.fornecedor.index');
    }

    public function listar(Request $request) {

        $fornecedores = Fornecedor::where('nome', 'like', '%'.$request->nome.'%')
        ->where('site', 'like', '%'.$request->site.'%')
        ->where('uf', 'like', '%'.$request->uf.'%')
        ->where('email', 'like', '%'.$request->email.'%')->get();
        
        return view('app.fornecedor.listar', compact('fornecedores'));
    }

    public function adicionar(Request $request) {
        
        $msg = '';
        if($request->input('_token') != '') {
            $regras = [
                'nome' => 'required',
                'site' => 'required',
                'email' => 'required|email',
                'uf' => 'required'
            ];
    
            $feedback =[
                'nome.required' => 'O campo Nome é Obrigatório.', 
                'site.required' => 'O campo Site é Obrigatório.',
                'email.required' => 'O campo E-mail é Obrigatório.',
                'email.email' => 'Insira um E-mail válido.',
                'uf.required' => 'O campo Unidade da Federação(UF) é Obrigatório.',
            ];
    
            $request->validate($regras, $feedback);
    
            Fornecedor::create([
                'nome' => $request->nome,
                'site' => $request->site,
                'email' => $request->email,
                'uf' => $request->uf,
            ]);

            $msg = 'O Fornecedor foi adicionado com Sucesso.';
        }

        return view('app.fornecedor.adicionar', compact('msg'));
    }
}
