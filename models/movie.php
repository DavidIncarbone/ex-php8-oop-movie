<?php

class Movie
{

    protected $duration;
    public $nationality;
    public $genres;

    use Director;

    public function __construct($_duration, $_nationality, Genres $_genres)
    {
        $this->duration = $_duration;
        $this->nationality = $_nationality;
        $this->genres = $_genres;
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
