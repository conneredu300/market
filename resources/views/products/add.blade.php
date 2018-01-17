@extends('layouts.master')

@section('title')
    Produtos
@endsection

@section('products')
    active
@endsection

@section('content')
    <h1 class="text-center">Produtos</h1>
    <div class="row">
        <div class="col-md-12 col-md-offset-12">
        <form method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="Text" name="name" class="form-control" placeholder="Nome">
            </div>
            <div class="form-group">
                <input type="Text" name="quantity" class="form-control" placeholder="Quantidade">
            </div>
            <div class="form-group">
                <input type="file" name="image" class="form-control" placeholder="Foto">
            </div>
            <div class="form-group">
                <input type="Text" name="description" class="form-control" placeholder="Descrição">
            </div>
            <div class="form-group">
                <input type="Text" name="price" class="form-control" placeholder="Preço">
            </div>
            <div class="form-group">
                <select name="categories" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <a class="btn btn-warning" href="{{ route('products') }}">Voltar a listagem</a>
                <button class="btn btn-primary" type="Submit">Cadastrar</button>
            </div>
        </form>
    </div>
    </div>
@endsection