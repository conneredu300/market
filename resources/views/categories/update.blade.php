@extends('layouts.master')

@section('title')
    Atualizar categoria
@endsection

@section('categories')
    active
@endsection

@section('content')
    <h1 class="text-center">Atualizar "{{ $category->name }}"</h1>
    <div class="row">
        <div class="col-md-12 col-md-offset-12">
            <form method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="control-label bold">Atualizar categoria</label>
                    <div class="input-group">
                        <span class="input-group-addon bold">Categoria</span>
                        <input type="Text" value="{{ $category->name  }}" class="form-control" name="name">
                        <span class="input-group-btn">
                   <button class="btn btn-primary" type="Submit">Atualizar</button>
                </span>
                    </div>
                </div>
            </form>
            <a href="{{ route('categories') }}" class="btn btn-info">Voltar a listagem</a>
        </div>
    </div>
@endsection