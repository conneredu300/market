
@extends('layouts.master')

@section('title')
    Customers
@endsection

@section('customers')
    active
@endsection

@section('content')
    <h1 class="text-center">Customers</h1>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal" action="/customers/add" method="POST">
                {{ csrf_field() }}
                <fieldset>
                    <legend>Customer Info</legend>
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <input type="Text" class="form-control" name="name" placeholder="Name">
                        </div>
                        <div class="col-md-4">
                            <input type="Text" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="col-md-4">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="Submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
                <br>
                <table class="table table-bordered ">
                    <thead>
                    <tr class="success">
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($customers as $customer)
                        <tr class="bold text-center">
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>
                                <a class="btn btn-danger" href="/customers/delete/{{ $customer->id }}">Delete</a>
                                <a class="btn btn-primary" href="/customers/update/{{ $customer->id }}">Update</a>
                                <a class="btn btn-warning" href="/customers/{{ $customer->id }}">View</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </form>
        </div>
    </div>
@endsection


