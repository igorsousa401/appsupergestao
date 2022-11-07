@extends('app.layouts.basico')
@section('titulo', 'Fornecedor')

@section('conteudo')
    <div class="conteudo-pagina">
        <div style="padding: 70px 0px 30px 0px; margin-bottom:20px;" class="titulo-pagina">
            <h1>Consulta</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{route('app.fornecedor.adicionar')}}">Novo</a></li>
                <li><a href="{{route('app.fornecedor')}}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina" >

             <div style="width: 90%; margin-left:auto; margin-right:auto; margin-top: 20px;">
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <td>Nome</td>
                            <td>Site</td>
                            <td>UF</td>
                            <td>E-mail</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fornecedores as $fornecedor)
                            <tr>
                                <td>{{$fornecedor->nome}}</td>
                                <td>{{$fornecedor->site}}</td>
                                <td>{{$fornecedor->uf}}</td>
                                <td>{{$fornecedor->email}}</td>
                                <td>Editar</td>
                                <td>Excluir</td>
                            </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
@endsection