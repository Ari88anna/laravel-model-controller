@extends('layouts.app')

@section('main_content')

    <div class="header-title">

        <h1>Movies</h1>

    </div>

    <div class="movie-collection">

        <div class="container">

            <ul class="menu">

                @foreach ( $movies as $movie)
    
                    <li>
                        <a href="">
                            <h3>{{ $movie->title }}</h3>                            
                        </a>

                        <div class="movie-details">

                            <div>Original title : {{ $movie->original_title }}</div>

                            <div>Release date : {{ $movie->date }}</div>

                            <div>Nationality: {{ $movie->nationality }}</div>

                            <div>Vote : {{ $movie->vote }}</div>

                        </div>
                    </li>
    
                @endforeach
    
            </ul>

        </div>

    </div>

@endsection