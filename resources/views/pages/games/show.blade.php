@extends('layouts.main-layout')

@section('content')
    <h2>
        {{ $game -> team1 }} {{ $game -> point1 }} - {{ $game -> point2 }} {{ $game -> team2}}
    </h2>
    <h2>
        The winner is: {{ ($game -> result) ? 'Team 1' : 'Team 2'}}
    </h2>
@endsection