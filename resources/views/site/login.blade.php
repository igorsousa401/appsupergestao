@extends('site.layouts.layout')
@section('titulo', 'Login')

@section('conteudo')

        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Login</h1>
            </div>

            <div class="informacao-pagina" style="width:30%; margin-right: auto; margin-left:auto;">
                <form action="{{route('login.autenticar')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input value="{{ old('email') }}" type="text" name="email" placeholder="e-mail" class="borda-preta">
                    {{$errors->has('email') ? $errors->first('email') : ''}}
                    <input value="{{ old('senha') }}" type="password" name="senha" placeholder="senha" class="borda-preta">
                    {{$errors->has('senha') ? $errors->first('senha') : ''}}
                    <button type="submit" class="borda-preta"> Entrar </button>
                    
                </form>
                {{isset($erro) && $erro != '' ? $erro : ''}}
            </div>  
        </div>
@endsection