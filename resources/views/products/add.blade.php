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
        <form method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                @if($errors->has('name'))<span class="help-block text-muted"><strong>{{ $errors->first('name') }}</strong></span>@endif
                <input type="Text" name="name" class="form-control{{ $errors->has('name')? ' has-error' : '' }}" placeholder="Nome">
            </div>

            <div class="form-group">
                @if($errors->has('quantity'))<span class="help-block text-muted"><strong>{{ $errors->first('quantity') }}</strong></span>@endif
                <input type="Text" name="quantity" class="form-control" placeholder="Quantidade">
            </div>

            <div class="form-group">
                @if($errors->has('image'))<span class="help-block text-muted"><strong>{{ $errors->first('image') }}</strong></span>@endif
                <input type="file" name="image" class="form-control" placeholder="Foto">
            </div>

            <div class="form-group">
                @if($errors->has('description'))<span class="help-block text-muted"><strong>{{ $errors->first('description') }}</strong></span>@endif
                <input type="Text" name="description" class="form-control" placeholder="Descrição">
            </div>

            <div class="form-group">
                @if($errors->has('price'))<span class="help-block text-muted"><strong>{{ $errors->first('price') }}</strong></span>@endif
                <input type="Text" name="price" class="form-control" placeholder="Preço">
            </div>

            <div class="form-group">
                @if($errors->has('categories'))<span class="help-block text-muted"><strong>{{ $errors->first('categories') }}</strong></span>@endif
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