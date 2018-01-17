@extends('layouts.master')

@section('title')
    Categorias
@endsection

@section('categories')
    active
@endsection

@section('content')
    <h1 class="text-center">Apagar "{{ $category->name }}"</h1>
    <div class="row">
        <div class="col-md-12 col-md-offset-12">
            <form method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="text-center">
                        <a href="{{ route('categories') }}" class="btn btn-info">Voltar a listagem</a>
                        <button class="btn btn-danger" type="Submit">Apagar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection