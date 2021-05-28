@extends('layouts.main-layout')

@section('content')
    <h1>
        Games:
    </h1>

    <ul>
        @foreach ($games as $game)
            <li>
                <a href="">
                    {{ $game -> team1 }} - {{ $game -> team2 }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection