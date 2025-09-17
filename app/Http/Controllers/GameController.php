<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::all();
        return view('game.index', compact('games')); // Fixed: should be 'games', not 'game'
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('game.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'price' => 'required|numeric|min:0',
            'rating' => 'required|numeric|min:0|max:10',
            'is_active' => 'boolean'
        ]);

        Game::create($validated);

        return redirect()->route('games.index')
                         ->with('success', 'Game created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        return view('game.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        return view('game.edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'price' => 'required|numeric|min:0',
            'rating' => 'required|numeric|min:0|max:10',
            'is_active' => 'boolean'
        ]);

        $game->update($validated);

        return redirect()->route('games.index')
                         ->with('success', 'Game updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();

        return redirect()->route('games.index')
                         ->with('success', 'Game deleted successfully.');
    }
}
