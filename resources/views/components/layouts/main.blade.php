<title>{{ $title ?? "Cool Web App" }}</title>
<link href="{{ asset('css/layouts/main.css') }}" rel="stylesheet" />
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

    @yield('content')

    <footer class="footer">
        <!-- Footer content (copyright, about, etc.) -->
        <p>&copy; 2023 MyMusicApp</p>
    </footer>
</div>
