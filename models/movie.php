<?php

class Movie
{

    protected $duration;
    public $nationality;
    public $genre;

    public function __construct($_duration, $_nationality, Genre $_genre)
    {
        $this->duration = $_duration;
        $this->nationality = $_nationality;
        $this->genre = $_genre;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;
    }
}
