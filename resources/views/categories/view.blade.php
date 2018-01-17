@extends('layouts.master')

@section('title')
      Categorias
@endsection

@section('categories')
    active
@endsection

@section('content')
    <h1 class="text-center">"Ìtens da Categoria: {{ $products->first()->category->name }}"</h1>

    <div class="row">
        <div class="col-md-12 col-md-offset-12">
            <table class="table table-bordered ">
                <thead>
                <tr class="warning">
                    <th class="text-center">Nome</th>
                    <th class="text-center">Quantidade</th>
                    <th class="text-center">Categoria</th>
                    <th class="text-center">Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr class="text-center bold">
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>
                            <a class="btn btn-danger" href="/products/delete/{{ $product->id }}">Apagar</a>
                            <a class="btn btn-primary" href="/products/update/{{ $product->id }}">Atualizar</a>
                            <a class="btn btn-warning" href="/products/{{ $product->id }}">Ver</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection