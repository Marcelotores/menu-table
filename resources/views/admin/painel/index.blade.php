@extends('templates.template')

@section('title', 'Pedidos')

@section('content')

<h3>Painel de Controle</h3>

    <ul class="list-group">
        <a href="{{ route('produtos.index') }}" class="list-group-item">Produtos</a>
    </ul>
    <ul class="list-group">
        <a href="{{ route('categorias.index') }}" class="list-group-item">Categorias</a>
    </ul>
    <ul class="list-group">
        <a href="{{ route('user-pedido.index') }}" class="list-group-item">Pedidos</a>
    </ul>



<!--
<div class="row">
    <aside class="col-sm-4">
        <p>Card with image</p>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Produtos</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum
                    dolor sit amet, consectetur adipisicing elit</p>
                <p class="card-text">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </p>
            </div>
        </div>
         

    </aside>

    <aside class="col-sm-4">
        <p>Card with bottom image</p>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Categorias</h5>
                <p class="card-text">This is a wider supporting text Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    supporting text Lorem ipsum </p>
            </div>
            <img class="card-img-bottom" src="http://bootstrap-ecommerce.com/main/images/posts/post3.jpg" alt="Card image cap">
        </div>
        



    </aside>

</div>


-->


@endsection