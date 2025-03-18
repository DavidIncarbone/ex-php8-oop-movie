<?php

class Genres
{
    public array $genres;


    public function __construct($_genres)
    {

        $this->genres = $_genres;
    }

    public function getGenres()
    {
        return $this->genres;
    }
}
