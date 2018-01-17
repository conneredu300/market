
@extends('layouts.master')

@section('title')
    Clientes
@endsection

@section('customers')
    active
@endsection

@section('content')
    <h1 class="text-center">Clientes</h1>
    <div class="row">
        <div class="col-md-12 col-md-offset-12">
            <form class="form-horizontal" action="/customers/add" method="POST">
                {{ csrf_field() }}
                <fieldset>
                    <legend>Info</legend>
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <input type="Text" class="form-control" name="name" placeholder="Nome">
                        </div>
                        <div class="col-md-4">
                            <input type="Text" class="form-control" name="email" placeholder="E-mail">
                        </div>
                        <div class="col-md-4">
                            <button type="reset" class="btn btn-default">Cancelar</button>
                            <button type="Submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </fieldset>
                <br>
                <table class="table table-bordered ">
                    <thead>
                    <tr class="success">
                        <th class="text-center">Nome</th>
                        <th class="text-center">E-mail</th>
                        <th class="text-center">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($customers as $customer)
                        <tr class="bold text-center">
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>
                                <a class="btn btn-danger" href="/customers/delete/{{ $customer->id }}">Apagar</a>
                                <a class="btn btn-primary" href="/customers/update/{{ $customer->id }}">Atualizar</a>
                                <a class="btn btn-warning" href="/customers/{{ $customer->id }}">Ver</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </form>
        </div>
    </div>
@endsection


