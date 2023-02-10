@extends('layouts.frontend')
@section('content')
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

            <form action="{{ route('chatgp') }}" method="post">

                @csrf

                <div class="form-group">
                    <label for="question">Ask your question?</label>
                    <input type="text" name="question" class="form-control">

                    <button class="btn btn-success">Enter</button>
                </div>
            </form>


            <code>{{ $result }}</code>
        </div>

        <div class="col-md-2"></div>


    </div>

@endsection
