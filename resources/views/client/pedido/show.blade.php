@extends('templates.template')

@section('title', 'Pedidos')

@section('content')

    <h3>Detalhes do Pedido</h3>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Produto</th>
                <th scope="col">Preço</th>
            </tr>
        </thead>
        @forelse($products as $product)
        <tbody>
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->name }}</td>
                <td>R$ {{ number_format($product->price, 2, ',', '.') }}</td>
            </tr>
        </tbody>
        @empty
            <h3>Nenhum Produto Cadastrado!</h3>
        @endforelse
    </table>

    <br>

    <p>
        Valor total: {{ $pedido->total }}
    </p>

@endsection