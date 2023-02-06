@extends('layouts.main')
@section('section')
    <div class="col-2">
        <a href="{{ route('products.create') }}" class="btn btn-success">+ Add Product</a>
    </div>
    <table class="table mt-xl-4">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Description</th>
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
                <td>{{ $product->user->name }}</td>
                <td>
                    <div class="row">
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm" >Edit</a>
                    </div>
                    <div class="row mt-2" style="width: 100%">
                        <form method="post" action="{{ route('products.destroy', $product->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" >Delete</button>
                        </form>
                    </div>
                </td>
                <td>
                    <a href="{{ route('products.gallery', $product->id) }}" class="btn btn-info btn-sm">Add Gallery</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="col-12">
        {{ $products->links() }}
    </div>
@endsection
