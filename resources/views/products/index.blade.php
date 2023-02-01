@extends('layouts.main')
@section('section')
    <div class="col-12">
        <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
    </div>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Description</th>
            <th>Image</th>
            <th>User</th>
            <th>Actions</th>
            <th>Gallery</th>

        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td><a href="{{ route('products.show', $product->id) }}">{{ $product->id }}</a></td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->image }}</td>
                <td>{{ $product->user->name }}</td>
                <td>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                    <form method="post" action="{{ route('products.destroy', $product->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
                <td>
                    <a href="/products/addgallery/{{ $product->id }}" class="btn btn-info">Add Gallery</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
