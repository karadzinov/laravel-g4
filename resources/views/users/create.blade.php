@extends('layouts.main')
@section('section')
    <div class="col-12">
        <div class="row">
            <div class="col-12">

                <form method="post" action="{{ route('users.store') }}">
                    @csrf

                    <div class="form-roup">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" aria-describedby="YourName" name="name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>


                </form>

            </div>
        </div>
    </div>
@endsection
