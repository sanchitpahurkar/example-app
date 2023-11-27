<?php
namespace Practicals;
// Define the Song class
class Song {
    // Properties
    public $title;
    public $artist;
    public $genre;
    public $tempo;

    // Constructor to initialize the properties
        public function __construct($title=null, $artist=null, $genre=null, $tempo=null) {
            $this->title = $title;
            $this->artist = $artist;
            $this->genre = $genre;
        }
        // Setter method for tempo
        public function setTempo($tempo) {
            $this->tempo = $tempo;
            // Check if $tempo is either an integer or a string containing only digits
            if (is_int($tempo) || (is_string($tempo) && ctype_digit($tempo))) {
                $this->tempo = (int) $tempo; // Convert to integer if it's a string
            } else {
                throw new \InvalidArgumentException('Tempo must be an integer or a string containing only digits.');
            }
        }
        public function getTempo() {
            return $this->tempo;
        }
    
}
?>