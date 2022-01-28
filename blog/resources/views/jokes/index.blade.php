@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="text-center mb-5">Our Jokes Archivio</h1>

        @forelse ($jokes as $joke)
            <div>
                <ul>
                    <li>
                        <h3>{{ $joke->title }}</h3>
                        <a class="bdg btn-primary" href="{{ route('jokes.show', $joke->id) }}">Read joke</a>
                        <a class="bdg btn-warning" href="{{ route('jokes.edit', $joke->id) }}">Edit joke</a>
                    </li>
                </ul>
            </div>
        @empty
            <div class="">
                <p class="text-center">
                    no joke found yet
                </p>
            </div>
        @endforelse
    </div>
@endsection