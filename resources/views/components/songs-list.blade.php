<main class="content">
        <!-- Main content (featured songs, albums, etc.) -->
        <h2>Featured Songs</h2>
        <div class="featured-songs">
            @foreach($songs as $song)
            <div class="song">
                <h3>{{ $song['title'] }}</h3>
                <p>{{ $song['artist'] }}</p>
            </div>
            <div class="song">
            <h3>{{ $song['title'] }}</h3>
            <p>{{ $song['artist'] }}</p>
            </div>
            @endforeach
            <!-- Add more featured songs -->
        </div>

    </main>