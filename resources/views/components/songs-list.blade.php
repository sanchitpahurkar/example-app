<main class="content">
        <!-- Main content (featured songs, albums, etc.) -->
        <h2>Featured Songs</h2>
        <div class="featured-songs">
            @foreach($songs as $song)
            <div class="song">
                <h3>Believer</h3>
                <p>Imagine Dragons</p>
            </div>
            <div class="song">
                <h3>Unstoppable</h3>
                <p>Sia</p>
            </div>
            <div class="song">
                <h3>2002</h3>
                <p>Anne-Marie</p>
            </div>
            <div class="song">
                <h3>Shape of you</h3>
                <p>Ed Sheeran</p>
            </div>
            <div class="song">
                <h3>Perfect</h3>
                <p>Ed Sheeran</p>
            </div>
            @endforeach
            <!-- Add more featured songs -->
        </div>

    </main>