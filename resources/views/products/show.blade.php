@extends('layouts.main')
@section('section')
    <div class="col-12">
        <h1>{{ $product->name }}</h1>


        <p>{{ $product->description }}</p>

        <p>Price for this product is {{ $product->price }} euros</p>

        <p>We have {{ $product->quantity }} number of {{ $product->name }}</p>

        <p>This is our gallery {{ $product->image }}</p>
    </div>
@endsection
