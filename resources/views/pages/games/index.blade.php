@extends('layouts.main-layout')

@section('content')
    <h1>
        Games:
    </h1>

    <ul>
        @foreach ($games as $game)
            <li>
                <a href="{{ route('games.show', $game -> id) }}">
                    {{ $game -> team1 }} - {{ $game -> team2 }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection