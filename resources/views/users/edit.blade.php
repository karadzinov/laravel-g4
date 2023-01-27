@extends('layouts.main')
@section('section')
    <div class="container">
        <div class="row">
            <div class="col-12">

                <form method="post" action="{{ route('users.update', $user->id) }}">
                    @csrf
                    @method('put')

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" aria-describedby="YourName" name="name" value="{{ $user->name }}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email"  value="{{ $user->email }}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" value="{{ $user->password }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>


                </form>

            </div>
        </div>
    </div>
@endsection
