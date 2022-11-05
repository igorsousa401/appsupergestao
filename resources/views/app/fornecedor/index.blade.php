<h1>Fornecedores</h1>

@foreach ($fornecedores as  $fornecedor)
    <div>
        <p><strong>Nome:</strong> {{$fornecedor->nome}}</p>
        <p><strong>Site:</strong> {{$fornecedor->site}}</p>
        <p><strong>E-mail:</strong> {{$fornecedor->email}}</p>
        <p><strong>UF:</strong> {{$fornecedor->uf}}</p>
    </div>
    <hr>
@endforeach