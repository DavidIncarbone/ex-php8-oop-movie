<?php
require_once "./traits/director.php";

require_once "./models/genres.php";
require_once "./models/movie.php";


$inception = new Movie("Inception", "Un ladro che ruba segreti tramite l'ingresso nei sogni delle persone è dato una possibilità di redenzione quando gli viene offerta l'opportunità di cancellare il suo passato criminale.", new Genres(['Sci-Fi', 'Azione', 'Thriller']));
$inception->setDirector("Christopher Nolan");
// var_dump($inception);


$theShawshankRedemption = new Movie("The Shawshank Redemption", "Due uomini si trovano a formare una solida amicizia mentre scontano le loro pene in un carcere di massima sicurezza.',
        'generi", new Genres(['Drammatico']));
$theShawshankRedemption->setDirector("Frank Darabont");
// var_dump($theShawshankRedemption);

$theDarkKnight = new Movie("The Dark Knigh", "Batman affronta il criminale noto come il Joker, che minaccia di distruggere Gotham City con la sua follia.',
        'generi',
        'generi", new Genres(['Azione', 'Crimine', 'Drammatico']));
$theDarkKnight->setDirector("Christopher Nolan");
// var_dump($theDarkKnight);

$films = [
    $inception,
    $theShawshankRedemption,
    $theDarkKnight
];
