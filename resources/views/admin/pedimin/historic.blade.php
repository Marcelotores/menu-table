@extends('templates.client.template')

@section('title', 'Pedidos')

@section('content')

    @forelse($pedidos as $pedido)
    <ul class="list-group">
        {{ $pedido->id }}
    </ul>
    @empty
        <h2>Histórico vazio</h2>
    @endforelse

@endsection