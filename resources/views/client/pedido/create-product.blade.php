@extends('templates.template')

@section('title', 'Pedidos')

@section('content')

    <h3>O que vai pedir?</h3>

    <form action="{{ route('pedidos.store') }}" method="GET">
        
        @forelse($products as $product)
            <input type="checkbox" name="{{ $product->id }}" value="{{ $product->id }}">{{ $product->name }}<br>
        @empty
        @endforelse
        
        <br>
        <button class="btn btn-primary">Pronto</button>
    </form>


@endsection