<?php

//Inizializzo la classe Movie
class Movie {

    //Inizializzo delle variabili d'istanza
    public $title;
    public $year;
    public $genre;
    public $cast = [];
    public $director;

    //Definisco un costruttore
    public function __construct($_title, $_year, $_genre, $_director) {
        $this->title = $_title;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->director = $_director;
    }

    //Definisco dei metodi
    public function getCast($_actor) {
        $this->cast[] = $_actor;
    }

}

//Definisco due istanze con la classe Movie
$Batman = new Movie('Batman', '1989', 'Superhero', 'Tim Burton');
$SpiderMan = new Movie('Spider-Man', '2002', 'Superhero', 'Sam Raimi');

//Richiamo il metodo definito nella classe Movie
$Batman->getCast('Jack Nicholson');
$Batman->getCast('Michael Keaton');
$Batman->getCast('Kim Basinger');

//var_dump($Batman);

$SpiderMan->getCast('Tobey Maguire');
$SpiderMan->getCast('Willem Dafoe');
$SpiderMan->getCast('Kirsten Dunst');

//var_dump($SpiderMan);

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercitazione PHP Programmazione ad Oggetti</title>
</head>
<body>
    
    <?php
        echo ("<h1>" . $Batman->title . "</h1>");
        echo ("<h2>" . $Batman->year . "</h2>");
        echo ("<h3>" . $Batman->director . "</h3>");
        echo ("<h4>" . $Batman->genre . "</h4>");

        echo("<ul>");
        foreach($Batman->cast as $actor) {
            echo ("<li>" . $actor . "</li>");
        };
        echo ("</ul>");

        echo ("<h1>" . $SpiderMan->title . "</h1>");
        echo ("<h2>" . $SpiderMan->year . "</h2>");
        echo ("<h3>" . $SpiderMan->director . "</h3>");
        echo ("<h4>" . $SpiderMan->genre . "</h4>");

        echo("<ul>");
        foreach($SpiderMan->cast as $actor) {
            echo ("<li>" . $actor . "</li>");
        };
        echo ("</ul>");
    ?>

</body>
</html>