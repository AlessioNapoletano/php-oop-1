<?php 
//Class Movie

class Movie {

    //fields
    public $name;
    public $vote;
    public $genre;

    //Constructor method
    public function __construct($_name, $_vote, $_genre) {
        $this -> name = $_name;
        $this -> vote = $_vote;
        $this -> genre = $_genre;
    }

    //Methods
    public function getNameMovie() {
        return $this -> name;
    }

    public function getVoteMovie() {
        return $this -> vote;
    }

    public function getGenreMovie() {
        return $this -> genre;
    }

}