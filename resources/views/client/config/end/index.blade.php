@extends('templates.template')

@section('title', 'Pedidos')

@section('content')

<h3>Configurações de endereço</h3>

    @forelse($addresses as $address)
        Rua: {{ $address->rua }} <br>
        Bairro: {{ $address->bairro }} <br>
        Número: {{ $address->numero }} <br>
        Telefone: {{ $address->telefone }} <br>
        <hr>
    @empty

    <h4>Você ainda não possui um endereço cadastrado</h4>

    <a class="btn btn-info" href="{{ route('end.create') }}">Cadastre um endereço aqui</a>

    @endforelse

    <a class="btn btn-info" href="{{ route('end.create') }}">Cadastre um novo endereço</a>

@endsection