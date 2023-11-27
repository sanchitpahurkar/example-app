@extends('layouts.main')

@section('title', $pageName)

@section('content')
    <main class="content">
        <h2>Playlist - {{ $playlistId }}</h2>
        <div class="playlist-songs">
            @foreach($songs as $song)
                <div class="song">
                    <h3>{{ $song->title }}</h3>
                    <p>{{ $song->artist }}</p>
                    <!-- Add more song details -->
                </div>
            @endforeach
        </div>
    </main>
@endsection
