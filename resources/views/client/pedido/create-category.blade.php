@extends('templates.template')

@section('title', 'Pedidos')

@section('content')

    <h3>O que vai pedir?</h3>

    @forelse($categories as $category)
    <ul class="list-group">
        <a href="{{ route('products.category', $category->id) }}" class="list-group-item">{{ $category->name }}</a>
    </ul>
    @empty
        <h2>Nenhuma categoria!</h2>
    @endforelse

@endsection