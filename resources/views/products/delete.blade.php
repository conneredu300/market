@extends('layouts.master')

@section('title')
    Apagar Produtos
@endsection

@section('products')
    active
@endsection

@section('content')
    <h1 class="text-center">Apagar "{{ $product->name }}"</h1>
    <div class="row">
        <div class="col-md-12 col-md-offset-12">
            <form method="POST">
                {{ csrf_field() }}
                <div class="form-group text-center">
                    <h2>Quantidade : {{ $product->quantity }}</h2>
                </div>
                <div class="form-group text-center">
                    <h2>Categoria : {{ $product->category->name }}</h2>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <a href="{{ route('products') }}" class="btn btn-info">Voltar a listagem</a>
                        <button class="btn btn-danger" type="Submit">Apagar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection