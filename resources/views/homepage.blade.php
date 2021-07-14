@extends('template.main-template')
@section('title')
    Laravel Movies | Homepage
@endsection
@section('main')
    <main>
        <div class="container">
            @foreach ($movies as $movie)
                @include('partials.movie-card', compact('movie'))
            @endforeach
        </div>
    </main>
@endsection