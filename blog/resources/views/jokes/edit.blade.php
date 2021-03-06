@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-5">Edit: {{ $joke->title }}</h1>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="{{ route('jokes.update', $joke->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="mb-5">
                        <label  class="form-label" for="title">Title</label>
                        <input class="form-control" type="text" id="title" name="title" value="{{ $joke->title }}">
                    </div>
                    <div class="mb-5">
                        <label  class="form-label" for="author">Author</label>
                        <input class="form-control" type="text" id="author" name="author"value="{{ $joke->author }}">
                    </div>
                    <div class="mb-5">
                        <label  class="form-label" for="body">Body</label>
                        <textarea class="form-control" id="body" name="body" rows="6">value="{{ $joke->body }}"</textarea>
                    </div>
                    <div class="mb-5">
                        <label  class="form-label" for="vote">Vote</label>
                        <input class="form-control" type="text" id="vote" name="vote"value="{{ $joke->vote }}">
                    </div>

                    <div class="d-flex justify-content-center">
                        <button  type="submit" class="btn btn-primary">Edit a joke</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection