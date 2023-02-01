@extends('layouts.main')

@section('section')
    <div class="col-12">

        <form method="post" action="{{ route('products.store') }}">
            @csrf

            <div class="form-group">
                <label for="name">Name your product:</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                       value="{{ old('name') }}">
                @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="price"
                       value="{{ old('price') }}">
                @error('price')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="text" name="quantity" class="form-control @error('quantity') is-invalid @enderror"
                       id="quantity" value="{{ old('quantity') }}">
                @error('quantity')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description"
                          class="form-control @error('description') is-invalid @enderror">


                {{ old('description') }}
                </textarea>
                @error('description')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" name="image" class="form-control @error('description') is-invalid @enderror"
                       id="image" value="{{ old('image') }}">
            </div>

            @error('image')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror

            <div class="form-group">
                <label for="user">User</label>
                <select class="form-control" id="user" name="user_id">
                    @foreach($users as $user)
                        <option value="{{  $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            @error('image')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror


            <div class="form-group">

                <button type="submit" class="btn btn-primary">Add product</button>
            </div>

        </form>


    </div>
@endsection
