<?php

class Movie
{

    protected $name;
    public $description;
    public $genres;

    use Director;

    public function __construct($_name, $_description, Genres $_genres)
    {
        $this->name = $_name;
        $this->description = $_description;
        $this->genres = $_genres->getGenres();
    }

    public function getname()
    {
        return $this->name;
    }

    public function setname($name)
    {
        $this->name = $name;
    }
}
