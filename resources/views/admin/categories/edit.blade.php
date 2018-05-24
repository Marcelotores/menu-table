@extends('templates.template')

@section('title', 'Admin')

@section('content')

    <h3>Editando produto</h3>

    @include('includes.alerts')

    <form action="{{ route('categorias.update', $category->id) }}" method="POST">

        @method('PUT')
        
        {{ csrf_field() }}

        <div class="form-group">
            <label for="name_id">Categoria</label>
            <input type="text" class="form-control" id="name_id" name="name" value="{{ $category->name }}" placeholder="Nome da categoria">
        </div>

        <div class="form-group">
            <button class="btn btn-primary">Salvar</button>
        </div>

    </form>

@endsection