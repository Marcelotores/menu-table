@extends('templates.template')

@section('title', 'Pedidos')

@section('content')

<h1>Meus Pedidos</h1>

<table class="table">

    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Data</th>
            <th scope="col">Total</th>
            <th scope="col">Situação</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    
    <tbody>
    @forelse($pedidos as $pedido)
        <tr>
            <th scope="row">{{ $pedido->id }}</th>
            <td>{{ $pedido->date }}</td>
            <td>R$ {{ number_format($pedido->total, 2, ',', '.') }}</td>
            <td>
                @if(!$pedido->active)
                    Atendido
                @else
                    Pendente
                @endif
            </td>
            <td>
                <a class="btn btn-info" href="{{ route('pedidos.show', $pedido->id) }}">Detalhes</a>
            
            </td>
        </tr>
    </tbody>
    @empty
        <h3>Você ainda não tem nenhum pedido</h3>
    @endforelse
</table>

{{ $pedidos->links() }}

<a class="btn btn-primary" href="{{ route('pedidos.create') }}">Pedir</a>


@endsection