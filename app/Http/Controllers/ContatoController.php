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

        $request->validate([
            'nome' => 'required|min:5|max:40',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000',

        ]);
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
 
}
