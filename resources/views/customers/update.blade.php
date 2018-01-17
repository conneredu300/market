@extends('layouts.master')

@section('title')
    Atualizar Clientes
@endsection

@section('customers')
    active
@endsection

@section('content')
    <h1 class="text-center">Atualizar <span class="maroon">"{{ $customer->name }}"</span></h1>
    <h4 class="text-center"></h4>
    <div class="row">
        <div class="col-md-12 col-md-offset-12">
            <form method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="text-center">
                        <input type="Text" class="form-control" name="name" value="{{ $customer->name }}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <input type="Text" class="form-control" name="email" value="{{ $customer->email }}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <a href="{{ route('customers') }}" class="btn btn-info">Voltar a listagem</a>
                        <button class="btn btn-primary" type="Submit">Atualizar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection