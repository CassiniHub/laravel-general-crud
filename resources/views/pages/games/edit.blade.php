@extends('layouts.main-layout')

@section('content')
    <form action="{{ route('games.update', $game -> id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="team1">Team 1</label>
            <input id="team1" type="text" name="team1" value="{{$game -> team1}}">
        </div>
        <div>
            <label for="point1">Points - Team 1</label>
            <input id="point1" type="text" name="point1" value="{{$game -> point1}}">
        </div>
        <div>
            <label for="team2">Team 2</label>
            <input id="team2" type="text" name="team2" value="{{$game -> team2}}">
        </div>
        <div>
            <label for="point2">Points - Team 2</label>
            <input id="point2" type="text" name="point2" value="{{$game -> point2}}">
        </div>
        <div>
            <label for="result">Team 1</label>
            <select name="result" id="result">
                <option value="1"
                    @if ($game -> result == 1)
                        selected    
                    @endif
                >Team 1</option>
                <option value="0"
                    @if ($game -> result == 0)
                        selected    
                    @endif
                >Team 2</option>
            </select>
        </div>
        <div>
            <button type="submit">
                Edit
            </button>
        </div>
    </form>
@endsection