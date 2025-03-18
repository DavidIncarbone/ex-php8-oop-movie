<?php

require_once "./models/genre.php";
require_once "./models/movie.php";

$titanic = new Movie("2:50", "US", new Genre("Dramatic", "History"));
$il_padrino = new Movie("2:30", "US", new Genre("Thriller", "History"));

var_dump($titanic->getDuration());
var_dump($titanic->nationality);

var_dump($il_padrino->getDuration());
var_dump($il_padrino->nationality);

var_dump($titanic);
var_dump($il_padrino);




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>PHP Classe Movie</title>
</head>

<body class="p-3">

</body>

</html>