{{ $slot }}
<form action="{{ route('site.contato') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input value="{{ old('nome') }}" name="nome" type="text" placeholder="Nome" class="{{$classe}}">
    <br>
    {{ $errors->has('nome') ? $errors->first('nome') : ''}}

    <input value="{{ old('telefone') }}" name="telefone" type="tel" placeholder="Telefone" class="{{$classe}}">
    <br>
    {{ $errors->has('telefone') ? $errors->first('telefone') : ''}}

    <input value="{{ old('email') }}" name="email" type="email" placeholder="E-mail" class="{{$classe}}">
    <br>
    {{ $errors->has('email') ? $errors->first('email') : ''}}

    <select name="motivo_contatos_id" class="{{$classe}}">
        <option value="">Qual o motivo do contato?</option>

        @foreach ($motivo_contatos as $key => $motivo_contato )
        <option value="{{$motivo_contato->id}}" {{old('motivo_contatos_id') == $motivo_contato->id ? 'selected' : ''}}>{{$motivo_contato->motivo_contato}}</option>     
        @endforeach
    </select>
    <br>
    {{ $errors->has('motivo_contatos_id') ? $errors->first('motivo_contatos_id') : ''}}

    <textarea name="mensagem" class="{{$classe}}">{{(old('mensagem') != '' ? old('mensagem') : 'Preencha aqui a sua mensagem')}}</textarea>
    <br>
    {{ $errors->has('mensagem') ? $errors->first('mensagem') : ''}}

    <button type="submit" class="{{$classe}}">ENVIAR</button>
</form>
