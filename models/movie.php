<?php

class Movie
{

    protected $name;
    public $description;
    public $cover;
    public $genres;

    use Director;

    public function __construct($_name, $_description, $_cover, Genres $genres)
    {
        $this->name = $_name;
        $this->description = $_description;
        $this->cover = $_cover;
        $this->genres = $genres->getGenres();
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
