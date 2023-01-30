@extends('layouts.main')
@section('section')
    <div class="col-12">

        <form method="post" action="{{ route('products.update', $product->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}">
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" name="price" id="price" class="form-control" value="{{ $product->price }}">
            </div>

            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="text" name="quantity" id="quantity" class="form-control" value="{{ $product->quantity }}">
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="desciption" name="description">{{ $product->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="text" name="image" id="image" class="form-control" value="{{ $product->image }}">
            </div>


            <button type="submit" class="btn btn-primary">Update product</button>


        </form>
    </div>
@endsection
