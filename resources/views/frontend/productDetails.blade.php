@extends('frontend.layouts.master')

@section('content')
    @include('frontend.layouts.header')
    <div class="row">
        <div class="col-sm-12">
            <h3>{{ $product->name }}</h3>
            <hr>
            <p>Category: {{ $product->category->name }} </p>
            <img width="150" class="img-thumbnail" src="{{ $product->image }}" alt="">
            <p>{{ $product->description }}</p>
        </div>
    </div>

@endsection