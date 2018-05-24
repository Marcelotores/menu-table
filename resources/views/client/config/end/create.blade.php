@extends('templates.template')

@section('title', 'Pedidos')

@section('content')

<h3>Novo endereço</h3>

    <form action="{{ route('end.store') }}" method="POST">
    
    @csrf

    <div class="form-group">
        <label for="rua_id">Rua</label>
        <input type="text" class="form-control" id="rua_id" name="rua" placeholder="Digite o nome da rua">
    </div>

    <div class="form-group">
        <label for="bairro_id">Bairro</label>
        <input type="text" class="form-control" id="bairro_id" name="bairro" placeholder="Digite o nome do bairro">
    </div>

    <div class="form-group">
        <label for="numero_id">Número</label>
        <input type="number" class="form-control" id="numero_id" name="numero" placeholder="Numero da sua casa">
    </div>

        <div class="form-group">
        <label for="telefone_id">Telefone</label>
        <input type="text" class="form-control" id="telefone_id" name="telefone" placeholder="Digite seu telefone">
    </div>

    <div class="form-group">
        <button class="btn btn-primary">Salvar</button>
    </div>

</form>

@endsection