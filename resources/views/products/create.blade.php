@extends('layouts.main')

@section('section')
    <div class="col-12">

        <form method="post" action="{{ route('products.store') }}">
            @csrf

            <div class="form-group">
                <label for="name">Name your product:</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" class="form-control" id="price">
            </div>

            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="text" name="quantity" class="form-control" id="quantity">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description"></textarea>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" name="image" class="form-control" id="image">
            </div>


            <div class="form-group">

               <button type="submit" class="btn btn-primary">Add product</button>
            </div>

        </form>


    </div>
@endsection
