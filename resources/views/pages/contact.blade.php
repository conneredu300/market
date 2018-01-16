
@extends('layouts.master')

@section('title')
    Contact Us
@endsection

@section('contact')
    active
@endsection

@section('content')
    <h1 class="text-center">Contact Us</h1>
    <p class="lead">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Corporis et expedita explicabo illum laboriosam mollitia,
        nemo odio omnis praesentium, quos ratione ullam.
        Asperiores delectus dolorum maxime nihil perferendis rem temporibus.
    </p>
    <p class="text-center">
        <img src="{{ asset('img/logo.jpg') }}" class="img-rounded" height="150" alt="">
    </p>
@endsection