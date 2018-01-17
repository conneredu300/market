@extends('layouts.master')

@section('title')
    Categories
@endsection

@section('categories')
    active
@endsection

@section('content')
    <h1 class="text-center">Categorias</h1>
    <div class="row">
        <div class="col-md-12 col-md-offset-12">
            <form action="categories/add" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="control-label bold">Adicionar Categoria</label>
                    <div class="input-group">
                        <span for="name">Categoria</span>
                        <input type="Text" class="form-control" name="name">
                        <span class="input-group-btn">
                   <button class="btn btn-primary" type="Submit">Adicionar</button>
                </span>
                    </div>
                </div>
            </form>
            <table class="table table-bordered ">
                <thead>
                <tr class="danger">
                    <th class="text-center">Código</th>
                    <th class="text-center">Nome</th>
                    <th class="text-center">Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr class="bold text-center">
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a class="btn btn-danger" href="/categories/delete/{{ $category->id }}">Apagar</a>
                            <a class="btn btn-primary" href="/categories/update/{{ $category->id }}">Atualizar</a>
                            <a class="btn btn-warning" href="/categories/{{ $category->id }}">Ver</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {{ $categories->links() }}
            </div>
        </div>
    </div>
@endsection