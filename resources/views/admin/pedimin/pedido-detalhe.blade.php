@extends('templates.template')

@section('title', 'Pedidos')

@section('content')


    <ul class="list-group">
        <h5>Pedido {{ $pedido->id }}</h5>   
        @foreach($products as $product)
        <i>
        {{ $product->name }}
        </i>
        @endforeach

    </ul>

    <br>
    <br>

    <b>Usuário {{ $user->name }}</b>
    <p>Endereço</p>
    <p>

        @foreach($user->addresses as $u)
        Rua: {{ $u->rua }} <br>
        Bairro: {{ $u->bairro }} <br>
        Número: {{ $u->numero }} <br>
        Telefone: {{ $u->telefone }} <br>
        @endforeach
    </p>


    <br><br>
    @if(!empty($pedido->id))
        <a href="{{ route('pedido-pronto', $pedido->id) }}" class="btn btn-info">Atendido</a>
    @endif



@endsection