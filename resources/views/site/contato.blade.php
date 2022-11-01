@extends('site.layouts.layout')
@section('titulo', 'Contato')

@section('conteudo')

        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Entre em contato conosco</h1>
            </div>

            <div class="informacao-pagina">
                <div class="contato-principal">
                    @component('site.layouts._components.formulario_contato', ['classe' => 'borda-preta'])
                        <p>A nossa equipe analisará a sua mensagem e responderá o mais breve possível</p>
                        <p>O nosso tempo médio de resposta é de 48 horas</p>
                    @endcomponent
                </div>
            </div>  
        </div>
@endsection