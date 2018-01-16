@extends('layouts.master')

@section('title')
    Delete Customer
@endsection

@section('customers')
    active
@endsection

@section('content')
    <h1 class="text-center">Delete Customer <span class="maroon">"{{ $customer->name }}"</span></h1>
    <h4 class="text-center">{{ $customer->email }}</h4>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="text-center">
                        <a href="/customers" class="btn btn-info">Back To List</a>
                        <button class="btn btn-danger" type="Submit">Delete</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection