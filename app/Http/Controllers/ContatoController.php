<?php

namespace App\Http\Controllers;

use App\Models\MotivoContato;
use App\Models\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request) {

        $motivo_contatos = MotivoContato::all();
        return view('site.contato', compact('motivo_contatos'));
    }

    public function save(Request $request) {
        $regras = [
            'nome' => 'required|min:5|max:40',
            'telefone' => 'required',
            'email' => 'required|email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000',

        ];

        $feedback = [
            'nome.min' => 'O Campo Nome precisa ter no mínimo 5 caracteres.',
            'nome.max' => 'O Campo Nome pode ter no máximo 40 caracteres.',
            'email.email' => 'O e-mail inserido é inválido.',
            'email.unique' => 'O e-mail inserido já está cadastrado',
            'mensagem.max' => 'O campo Mensagem pode ter no máximo 2000 caracteres.',

            'required' => 'O campo :attribute precisa ser preenchido.',
        ];

        $request->validate($regras, $feedback);
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
 
}
