<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function getValidationRules() {
        return [
            'team1' => 'required|string|min:3|max:255',
            'team2' => 'required|string|min:3|max:255',
            'point1' => 'required|integer|min:0|max:130',
            'point2' => 'required|integer|min:0|max:130',
            'result' => 'required|boolean'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();

        return view('pages.games.index', compact(
            'games'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request -> validate($this -> getValidationRules());
        
        $match = Game::create($validate);
        dd($match);

        return redirect() -> route('games.show', $match -> id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game = Game::findOrFail($id);

        return view('pages.games.show', compact(
            'game'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game = Game::findOrFail($id);

        return view('pages.games.edit', compact(
            'game'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $game = Game::findOrFail($id);

        $validate = $request -> validate($this -> getValidationRules());

        $game -> update($validate);

        return redirect() -> route('games.show', $game -> id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $game = Game::findOrFail($id);
        dd($game);
        $game -> delete();

        return redirect() -> route('games.index');
    }
}
