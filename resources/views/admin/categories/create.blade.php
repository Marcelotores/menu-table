@extends('template.template')

@section('title', 'Admin')

@section('content')

    <h3>Nova Categoria</h3>

    <form action="{{ route('categorias.store') }}" method="POST">
    
        @csrf

        <div class="form-group">
            <label for="name_id">Categoria</label>
            <input type="text" class="form-control" id="name_id" name="name" placeholder="Nome da Categoria">
        </div>

        <div class="form-group">
            <button class="btn btn-primary">Salvar</button>
        </div>

    </form>

@endsection