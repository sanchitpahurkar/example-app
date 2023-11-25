<?php

class Song {
    private $title;
    private $artist;
    private $genre;
    private $tempo;

    // Constructor to initialize the Song object with default values
    public function __construct($title, $artist, $genre, $tempo) {
        $this->title = $title;
        $this->artist = $artist;
        $this->genre = $genre;
        $this->tempo = $tempo;
    }

    // Getter for Title
    public function getTitle() {
        return $this->title;
    }

    // Setter for Title
    public function setTitle($title) {
        $this->title = $title;
    }

    // Getter for Artist
    public function getArtist() {
        return $this->artist;
    }

    // Setter for Artist
    public function setArtist($artist) {
        $this->artist = $artist;
    }

    // Getter for Genre
    public function getGenre() {
        return $this->genre;
    }

    // Setter for Genre
    public function setGenre($genre) {
        $this->genre = $genre;
    }

    // Getter for Tempo
    public function getTempo() {
        return $this->tempo;
    }

    // Setter for Tempo
    public function setTempo($tempo) {
        $this->tempo = $tempo;
    }
}
?>
