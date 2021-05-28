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
                <a href="{{ route('games.edit', $game -> id) }}">
                    &#9998;
                </a>
                <a href="">
                    &#10060;
                </a>
            </li>
        @endforeach
    </ul>
@endsection