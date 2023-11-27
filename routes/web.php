<?php
use Illuminate\Support\Facades\Route;
use App\Models\Song;
use App\Http\Controllers\PlaylistController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/veggies/{veggieName}', function ($veggieName) {
    return $veggieName;
})->where('veggieName', '[a-zA-Z]+'); // Accepts any alphabetical characters for veggieName

Route::get('/veggies/{veggieName}', function ($veggieName) {
    $allowedVeggies = ['baigan', 'bhindi', 'aaloo', 'gobhi'];

    if (in_array($veggieName, $allowedVeggies)) {
        return $veggieName;
    } else {
        abort(404);
    }
});

Route::get('/veggies', function () {
    return view('veggies');
});

Route::get('/songs_static', function () {
    return view('songs_static');
  });

Route::get('/songs', function() {
    $songs = Song::all(); // Fetch all songs from the database
 
    return view('songs', ['songs' => $songs]);
});

Route::get('/playlists/{playlistId}',  function ($playlistId) {
    return view('playlist',[ 'songs' => Song::all(), 'playlistId' => $playlistId]);
});

  
