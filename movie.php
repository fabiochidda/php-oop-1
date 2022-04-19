<?php

class Movie {

    public $title;
    public $director;
    public $description;
    public $year;

    function __construct($_title, $_director, $_description, $_year){
        $this->title=$_title;
        $this->director=$_director;
        $this->description=$_description;
        $this->year=$_year;
    }

}


?>