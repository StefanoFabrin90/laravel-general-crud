@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="text-center mb-5">Our Jokes Archivio</h1>

        @forelse ($jokes as $joke)
            <div>
                <h3>{{ $joke->title }}</h3>
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