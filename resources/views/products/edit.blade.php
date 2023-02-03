@extends('layouts.main')
@section('section')
    <div class="col-12">

        <form method="post" action="{{ route('products.update', $product->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group mt-2">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}">
            </div>

            <div class="form-group mt-2">
                <label for="price">Price:</label>
                <input type="text" name="price" id="price" class="form-control" value="{{ $product->price }}">
            </div>

            <div class="form-group mt-2">
                <label for="quantity">Quantity:</label>
                <input type="text" name="quantity" id="quantity" class="form-control" value="{{ $product->quantity }}">
            </div>

            <div class="form-group mt-2">
                <label for="description">Description:</label>
                <textarea id="desciption" name="description">{{ $product->description }}</textarea>
            </div>

            <div class="form-group mt-2">
                <label for="image">Image:</label>
                <input type="text" name="image" id="image" class="form-control" value="{{ $product->image }}">
            </div>


            <div class="form-group mt-2">
                <label for="user">User</label>
                <select name="user_id" id="user" class="form-control">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" @if($product->user_id === $user->id) selected @endif>{{ $user->name }}</option>
                    @endforeach
                </select>

            </div>


            <button type="submit" class="btn btn-primary mt-xl-4">Update product</button>


        </form>
    </div>
@endsection
