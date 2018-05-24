@extends('templates.template')

@section('title', 'Pedidos')

@section('content')

    <h3>Histórico de Pedidos</h3>

    @forelse($pedidos as $pedido)
    <ul class="list-group">
        Pedido{{ $pedido->id }}
        -{{ date('d/m - H:m',  strtotime($pedido->created_at)) }}
    </ul>
    @empty
        <h2>Histórico vazio</h2>
    @endforelse


@endsection