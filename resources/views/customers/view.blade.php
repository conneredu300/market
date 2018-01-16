@extends('layouts.master')

@section('title')
    Update Customer
@endsection

@section('customers')
    active
@endsection

@section('content')
    <h1 class="text-center">View <span class="maroon">"{{ $customer->name }}"</span></h1>
    <h4 class="text-center"></h4>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

                    <div class="text-center">
                        <h4>
                            <span class="maroon bold">Email : </span>
                            {{ $customer->email }}
                        </h4>
                        <h4>
                            <span class="maroon bold">Created At : </span>
                            {{ $customer->created_at }}
                        </h4>
                        <h4>
                            <span class="maroon bold">Updated At : </span>
                            {{ $customer->updated_at }}
                        </h4>
                          <div class="text-center">
                              <a href="/customers" class="btn btn-info">Back To List</a>
                          </div>
                    </div>
        </div>
    </div>
@endsection