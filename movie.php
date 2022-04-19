<?php

class Movie {

    public $title;
    public $director;
    public $description;
    public $year;
    public $vote;
    public $language;

    function __construct($_title, $_director, $_description, $_year, $_vote, $_language){
        $this->title=$_title;
        $this->director=$_director;
        $this->description=$_description;
        $this->year=$_year;
        $this->vote=$_vote;
        $this->language=$_language;
    }

    public function getVoteAndLang(){
        return $this->vote. ' ' . $this->language;
    }

}


?>