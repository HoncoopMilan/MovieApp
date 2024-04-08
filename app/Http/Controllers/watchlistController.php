<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Watchlist;

class watchlistController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $watchlist = $user->watchlist()->with('film')->get();
        return view('movies.watchlist', ['watchlist' => $watchlist]);
    }
    
}
