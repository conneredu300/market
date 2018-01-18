@extends('layouts.master')

@section('title')
    Produto
@endsection

@section('products')
    active
@endsection

@section('content')
    <h1 class="text-center">"{{ $product->name }}"</h1>
    <div class="row">
        <div class="col-md-12 col-md-offset-12">
            <div class="form-group text-center">
                {{--<img src='{{ storage_path('images/'.$product->image) }}'>--}}
            </div>
            <div class="form-group text-center">
                <h2>Preço: {{ $product->price }}</h2>
            </div>
            <div class="form-group text-center">
                <h2>Quantidade: {{ $product->quantity }}</h2>
            </div>
            <div class="form-group text-center">
                <h2>Categoria : {{ $product->category->name }}</h2>
            </div>
            <div class="form-group text-center">
                <a href="{{ route('products') }}" class="btn btn-info">Voltar a listagem</a>
            </div>
        </div>
    </div>
@endsection