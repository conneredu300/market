
@extends('layouts.master')

@section('title')
    Pedidos no carrinho
@endsection

@section('orders')
    active
@endsection

@section('content')
    <h1 class="text-center">Pedidos</h1>
    <div class="row">
        <div class="col-md-12 col-md-offset-12">
            <table class="table table-bordered ">
                <thead>
                <tr class="info">
                    <th class="text-center">Ítem</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr class="text-center bold">
                        <td>{{ $order->name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="text-center">
                <a href="{{ route('orders') }}" class="btn btn-primary">Voltar ao carrinho</a>
            </div>

        </div>
    </div>
@endsection


