<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class playlists extends Controller
{
    public function addSong(Request $request)
    {
        $playlist_id = $request->playlist_id;
        $song_id = $request->song_id;
        $playlist = playlist::findOrFail($playlist_id);
        // Check if the relationship already exists
        $relationExists = $playlist->songs()
            ->wherePivot('playlist_id', $playlist_id)
            ->wherePivot('song_id', $song_id)
            ->exists();
        if ($relationExists) {
            return back()->with('flashMessage', ['message' => 'this song already exists in the playlist', 'type' => 'failure']);
        } else {
            $playlist->songs()->attach($song_id);
            return back()->with('flashMessage', ['message' => 'song added to the playlist successefully', 'type' => 'success']);
        }
    }
    public function newPlaylist(Request $request)
    {
        $user = Auth::user();
        $newPlaylist = new Playlist();
        $newPlaylist->name = $request->name;
        $newPlaylist->user()->associate($user); // Corrected this line
        $newPlaylist->save();
        return back()->with('flashMessage', ['message' => 'playlist added successefully', 'type' => 'success']);
    }
}
