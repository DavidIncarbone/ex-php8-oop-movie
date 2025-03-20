<?php

class Genres
{
    public $genres;


    public function __construct(array $_genres)
    {

        $this->genres = $_genres;
    }

    public function getGenres()
    {
        return $this->genres;
    }
}
