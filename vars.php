<?php
$titanic = new Movie("2:50", "US", new Genres(["Dramatic", "History"]));
$il_padrino = new Movie("2:30", "US", new Genres(["Thriller"]));

var_dump($titanic->getDuration());
var_dump($titanic->nationality);

var_dump($il_padrino->getDuration());
var_dump($il_padrino->nationality);

$il_padrino->setDirector("Francis Ford Coppola");

var_dump($titanic);
var_dump($il_padrino);
