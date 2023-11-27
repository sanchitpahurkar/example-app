<title>
  Music App
</title>
<style>
  /* Your general styles for layout, fonts, etc. */

/* Specific styles for the music app home page */
.container {
    display: grid;
    grid-template-columns: 250px 1fr;
    grid-template-rows: auto 1fr auto;
    gap: 10px;
    min-height: 100vh;
    background-color: #191414; /* Dark background similar to Spotify */
    color: #fff; /* Text color */
}

.header {
    grid-column: span 2;
    padding: 20px;
    background-color: #1DB954; /* Green color similar to Spotify */
    text-align: center;
}

.sidebar {
    background-color: #121212; /* Dark sidebar */
    padding: 20px;
}

.playlist {
    list-style: none;
    padding: 0;
    margin: 0;
}

.playlist li {
    margin-bottom: 10px;
    cursor: pointer;
}

.content {
    padding: 20px;
}

.featured-songs {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 20px;
}

.song {
    background-color: #282828; /* Song box color */
    padding: 10px;
}

.footer {
    grid-column: span 2;
    text-align: center;
    padding: 10px;
    background-color: #121212; /* Dark footer */
}

</style>
<div class="container">
    <header class="header">
        <!-- Header content -->
        <h1>Welcome to MyMusicApp</h1>
    </header>

    <aside class="sidebar">
        <!-- Sidebar content (maybe playlists or navigation) -->
        <h2>Playlists</h2>
        <ul class="playlist">
            <li>Playlist 1</li>
            <li>Playlist 2</li>
            <li>Playlist 3</li>
            <!-- Add more playlists -->
        </ul>
    </aside>

    <main class="content">
        <!-- Main content (featured songs, albums, etc.) -->
        <h2>Featured Songs</h2>
        <div class="featured-songs">
            <div class="song">
                <h3>Song Title 1</h3>
                <p>Artist Name - Album Name</p>
            </div>
            <div class="song">
                <h3>Song Title 2</h3>
                <p>Artist Name - Album Name</p>
            </div>
            <!-- Add more featured songs -->
        </div>
    </main>

    <footer class="footer">
        <!-- Footer content (copyright, about, etc.) -->
        <p>&copy; 2023 MyMusicApp</p>
    </footer>
</div>
