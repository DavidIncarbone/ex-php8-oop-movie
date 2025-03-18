<?php

trait Director
{

    private $director;

    public function setdirector($director)
    {
        $this->director = $director;
    }

    public function getDirector()
    {
        return $this->director;
    }
}
