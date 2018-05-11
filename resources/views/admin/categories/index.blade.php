@extends('template.template')

@section('title', 'Admin')

@section('content')

    <h1>Todas as Categorias</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Categoria</th>
                <th>Ações</th>
            </tr>
        </thead>
        @forelse($categories as $category)
        <tbody>
            <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>{{ $category->name }}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{ route('categorias.edit', $category->id) }}" class="btn btn-primary">Editar</a>&nbsp;
                        <form action="{{ route('categorias.destroy', $category->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Remover</button>
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
    <a href="{{ route('categorias.create') }}" class="btn btn-info">Novo</a>


@endsection