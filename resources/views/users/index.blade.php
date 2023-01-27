@extends('layouts.main')
@section('section')

    <div class="container">
        <div class="row">
            <a href="{{ route('users.create') }}" class="btn btn-primary">Create User</a>
        </div>

        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td><a href="{{ route('users.show', $user->id) }}">{{ $user->id }}</a></td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection