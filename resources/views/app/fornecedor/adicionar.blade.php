@extends('app.layouts.basico')
@section('titulo', 'Adicionar')

@section('conteudo')
    <div class="conteudo-pagina">
        <div style="padding: 70px 0px 30px 0px; margin-bottom:20px;" class="titulo-pagina">
            <h1>Adicionar</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{route('app.fornecedor.adicionar')}}">Novo</a></li>
                <li><a href="{{route('app.fornecedor')}}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            
            <div style="width: 30%; margin-left:auto; margin-right:auto;">
                {{$msg}}
                <form action="{{route('app.fornecedor.adicionar')}}" method="POST">
                    @csrf
                    <input type="text" name="nome" placeholder="Nome" class="borda-preta">
                    <input type="text" name="site" placeholder="Site" class="borda-preta">
                    <input type="text" name="uf" placeholder="UF" class="borda-preta">
                    <input type="text" name="email" placeholder="E-mail" class="borda-preta">
                    <button type="submit" class="borda-preta">Cadatrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection