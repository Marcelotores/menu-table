@extends('templates.client.template')

@section('title', 'Pedidos')

@section('content')

    <h3>Pedidos</h3>

    @forelse($pedidos as $pedido)
    <ul class="list-group">
        <a href="{{ route('pedido.detalhe', $pedido->id) }}" class="list-group-item"> Pedido {{ $pedido->id }}</a>
    </ul>
    @empty
        <h2>Nenhum pedido pendente!</h2>
    @endforelse

    <!--

    @forelse($pedidos as $pedido)
    <ul class="list-group">
        <h5>Pedido {{ $pedido->id }}</h5>   
        @foreach($pedido->products as $product)
        <i>
        {{ $product->name }}
        </i>

        @endforeach
    </ul>
    @empty
        <h2>Pedido Atendido!</h2>
    @endforelse

    <br><br>
    @if(!empty($pedido->id))
        <a href="{{ route('pedido-pronto', $pedido->id) }}" class="btn btn-info">Atendido</a>
    @endif

    -->

@endsection