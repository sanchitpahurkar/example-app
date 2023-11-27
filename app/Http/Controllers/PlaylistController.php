<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function show($playlistId)
    {
        // Fetch songs (replace this with your logic to retrieve songs)
        $songs = []; // Replace this with your actual logic to fetch songs

        // Pass the songs data to the view
        return view('playlist', [
            'pageName' => "Playlist - $playlistId",
            'songs' => $songs,
        ]);
    }
}
