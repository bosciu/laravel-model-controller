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
                    <h4>Data di uscita: {{date('d-m-Y', strtotime($movie['date']))}}</h4>
                    <h4>Voto: 
                        @for ($i = 0; $i < 5 ; $i++)
                            @if ($i < round($movie['vote']/2))
                                <i class="fas fa-star"></i>
                            @else
                                <i class="far fa-star"></i>
                            @endif
                        @endfor
                    </h4>
                </div>
            @endforeach
        </div>
    </main>
@endsection