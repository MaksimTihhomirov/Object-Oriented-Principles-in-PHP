
<?php

class Song
{
    public function __construct(
        public string $name,
        public string $artist
    ) {
    }
}

class Playlist
{
    public function __construct(
        public string $name,
        public array $songs
    ) {
    }
}

$songs = [
    new Song('My Heart Will Go On', 'Celine Dion'),
    new Song('Back in Black', 'AC/DC'),
    new Song('Are You Ready', 'AC/DC'),
];

$playlist = new Playlist('90s Movie Soundtracks', $songs);

foreach ($playlist->songs as $song) {
    echo $song->name . ' - ' . $song->artist . PHP_EOL;
}
