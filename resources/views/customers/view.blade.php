@extends('layouts.master')

@section('title')
    Visualização
@endsection

@section('customers')
    active
@endsection

@section('content')
    <h1 class="text-center"><span class="maroon">"{{ $customer->name }}"</span></h1>
    <h4 class="text-center"></h4>
    <div class="row">
        <div class="col-md-12 col-md-offset-12">

                    <div class="text-center">
                        <h4>
                            <span class="maroon bold">E-mail : </span>
                            {{ $customer->email }}
                        </h4>
                        <h4>
                            <span class="maroon bold">Data de criação : </span>
                            {{ $customer->created_at }}
                        </h4>
                        <h4>
                            <span class="maroon bold">Data de atualização : </span>
                            {{ $customer->updated_at }}
                        </h4>
                          <div class="text-center">
                              <a href="{{ route('customers') }}" class="btn btn-info">Voltar a listagem</a>
                          </div>
                    </div>
        </div>
    </div>
@endsection