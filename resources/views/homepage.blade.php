@extends('template.main-template')
@section('title')
    Laravel Movies | Homepage
@endsection
@section('main')
    <main>
        <div class="container">
            @foreach ($movies as $movie)
                <div class="card">
                    <h2>{{$movie['title']}}</h2>
                    <h3>{{$movie['original_title']}}</h3>
                    <h4>Data di uscita: {{$movie['date']}}</h4>
                    <h4>Voto: {{$movie['vote']}}</h4>
                </div>
            @endforeach
        </div>
    </main>
@endsection