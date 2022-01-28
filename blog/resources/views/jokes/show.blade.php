@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-5">title:{{ $joke->title }}</h1>
        <h1 class="text-center mb-5">author:{{ $joke->author }}</h1>
        <p class="text-center mb-5">descrpition:{{ $joke->body }}</p>
        <p class="text-center mb-5">vote:{{ $joke->vote }}</p>

        <a class="bgd btn-primary" href="{{ route('jokes.index')}}">Back to archivio</a>
    </div>
@endsection