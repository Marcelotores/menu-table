@extends('templates.template')

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

    <br>

    {{ $pedidos->links() }}


@endsection