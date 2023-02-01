@extends('layouts.main')
@section('section')
    <div class="col-12">

        <form action="{{ route('products.store.image', $product->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image">
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Add image</button>
            </div>
        </form>

    </div>
@endsection
