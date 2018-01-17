@extends('layouts.master')

@section('title')
    Apagar clientes
@endsection

@section('customers')
    active
@endsection

@section('content')
    <h1 class="text-center">Apagar cliente <span class="maroon">"{{ $customer->name }}"</span></h1>
    <h4 class="text-center">{{ $customer->email }}</h4>
    <div class="row">
        <div class="col-md-12 col-md-offset-12">
            <form method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="text-center">
                        <a href="{{ route('customers') }}" class="btn btn-info">Voltar a listagem</a>
                        <button class="btn btn-danger" type="Submit">Apagar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection