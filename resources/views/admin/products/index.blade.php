@extends('templates.admin.template')

@section('title', 'Admin')

@section('content')

    <h1>Todos os produtos</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Produto</th>
                <th scope="col">Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        @forelse($products as $product)
        <tbody>
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->name }}</td>
                <td>R$ {{ number_format($product->price, 2, ',', '.') }}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{ route('produtos.edit', $product->id) }}" class="btn btn-primary">Editar</a>&nbsp;

                        <form action="{{ route('produtos.destroy', $product->id) }}" method="POST">
                            {!! csrf_field() !!}
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete"/>
                        </form>
                    </div>
                </td>
            </tr>
        </tbody>
        @empty
            <h3>Nenhum Produto Cadastrado!</h3>
        @endforelse
    </table>

    <br>
    <a href="{{ route('produtos.create') }}" class="btn btn-info">Novo</a>


@endsection