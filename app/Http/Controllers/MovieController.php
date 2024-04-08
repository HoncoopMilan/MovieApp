<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $films = Film::all();
        return view('movies.dashboard', compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
{
    $film = Film::findOrFail($id);
    $inWatchlist = auth()->user()->watchlist()->where('film_id', $id)->exists();
    return view('movies.show', compact('film', 'inWatchlist'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function addToWatchlist($filmId)
{
    // Voeg de film toe aan de watchlist van de huidige gebruiker
    auth()->user()->watchlist()->create(['film_id' => $filmId]);
    
    // Keer terug naar de vorige pagina of een andere pagina
    return back();
}

public function removeFromWatchlist($filmId)
{
    // Zoek de film in de watchlist van de huidige gebruiker en verwijder deze
    auth()->user()->watchlist()->where('film_id', $filmId)->delete();
    
    // Keer terug naar de vorige pagina of een andere pagina
    return back();
}
}
