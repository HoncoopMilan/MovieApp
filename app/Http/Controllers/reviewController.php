<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class reviewController extends Controller
{
    public function create($filmId)
    {
        $film = Film::findOrFail($filmId);
        // Hier laad je de view waar gebruikers een review kunnen schrijven
        return view('reviews.create', ['film' => $film]);
    }
    
}
