{{ $slot }}
<form action="{{ route('site.contato') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input value="{{ old('nome') }}" name="nome" type="text" placeholder="Nome" class="{{$classe}}" required>
    <br>
    <input value="{{ old('telefone') }}" name="telefone" type="tel" placeholder="Telefone" class="{{$classe}}" required>
    <br>
    <input value="{{ old('email') }}" name="email" type="email" placeholder="E-mail" class="{{$classe}}" required>
    <br>
    <select name="motivo_contatos_id" class="{{$classe}}">
        <option value="">Qual o motivo do contato?</option>

        @foreach ($motivo_contatos as $key => $motivo_contato )
        <option value="{{$motivo_contato->id}}" {{old('motivo_contatos_id') == $motivo_contato->id ? 'selected' : ''}}>{{$motivo_contato->motivo_contato}}</option>     
        @endforeach
    </select>
    <br>
    <textarea name="mensagem" class="{{$classe}}">{{(old('mensagem') != '' ? old('mensagem') : 'Preencha aqui a sua mensagem')}}</textarea>
    <br>
    <button type="submit" class="{{$classe}}">ENVIAR</button>
</form>