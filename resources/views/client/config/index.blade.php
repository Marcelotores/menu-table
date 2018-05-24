@extends('templates.template')

@section('title', 'Pedidos')

@section('content')

<h3>Configurações</h3>

<a class="btn btn-primary" href="{{ route('end.config') }}">Endereço</a>

@endsection