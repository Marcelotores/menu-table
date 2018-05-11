@extends('templates.admin.template')

@section('title', 'Admin')

@section('content')

    <h3>Editando produto</h3>

    <form action="{{ route('produtos.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name_id">Categorias</label>
            <select class="custom-select" name="category_id">

                <option selected value="{{ $category->id }}">Selecione a categoria</option>

                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach

            </select>
        </div>

        <div class="form-group">
            <label for="name_id">Produto</label>
            <input type="text" class="form-control" id="name_id" name="name" value="{{ $product->name }}" placeholder="Nome do Produto">
        </div>

        <div class="form-group">
            <label for="price_id">Preço</label>
            <input type="number" class="form-control" id="price_id" name="price" value="{{ $product->price }}" placeholder="Preço do Produto">
        </div>

        <div class="form-group">
            <label for="description_id">Descrição</label>
            <input type="texarea" class="form-control" id="description_id" name="description" value="{{ $product->description }}" placeholder="Descrição do Produto">
        </div>

        <div class="form-group">
            <button class="btn btn-primary">Salvar</button>
        </div>

    </form>

@endsection