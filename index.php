
<?php

class Playlist
{
    public $name;
    public $songs;

    public function __construct($name, $songs)
    {
        $this->name = $name;
        $this->songs = $songs;
    }
}

$playlists = [];

$playlists[] = new Playlist('80s Headbangers', [
    'Back in Black',
    'Are You Ready',
    'Welcome to the Jungle'
]);

$playlists[] = new Playlist('Depressing 90s', [
    'Creep',
    'Wonderwall'
]);

$playlists[] = new Playlist('Boy-band Faves', [
    'I Want It That Way',
    'Bye Bye Bye'
]);

var_dump($playlists);
