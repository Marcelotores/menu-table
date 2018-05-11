@extends('template.template')

@section('title', 'Admin')

@section('content')

    <h3>Novo Produto</h3>

    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf

        <div class="form-group">
        <label for="name_id">Categorias</label>
            <select required class="custom-select" name="category_id">

                <option disabled selected>Selecione a categoria</option>

                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach

            </select>
        </div>

        <div class="form-group">
            <label for="name_id">Produto</label>
            <input type="text" class="form-control" id="name_id" name="name" placeholder="Nome do Produto">
        </div>

        <div class="form-group">
            <label for="price_id">Preço</label>
            <input type="number" class="form-control" id="price_id" name="price"  placeholder="Preço do Produto">
        </div>

        <div class="form-group">
            <label for="description_id">Descrição</label>
            <input type="texarea" class="form-control" id="description_id" name="description"  placeholder="Descrição do Produto">
        </div>

        <div class="form-group">
            <button class="btn btn-primary">Salvar</button>
        </div>

    </form>

@endsection