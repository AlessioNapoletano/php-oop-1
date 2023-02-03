<?php 
//Class Movie

class Movie {

    //fields
    public $cover;
    public $name;
    public $vote;
    public $genre;

    //Constructor method
    public function __construct($_cover, $_name, $_vote, $_genre) {
        $this->cover = $_cover;
        $this->name = $_name;
        $this->vote = $_vote;
        $this->genre = $_genre;
    }

    //Methods
    public function getCoverMovie() {
        return $this->cover;
    }

    public function getNameMovie() {
        return $this->name;
    }

    public function getVoteMovie() {
        return $this->vote;
    }

    public function getGenreMovie() {
        return $this->genre;
    }

}