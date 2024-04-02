<?php

require './Models/Movie.php';

// creo due istanze di Movie
$movie1 = new Movie("Pulp Fiction", ["Pulp", "Crime"], "Quentin Tarantino");
$movie1overview = "Una serie di storie intrecciate che raccontano la vita di criminali, gangster e pugili nella Los Angeles del 1994.";
$movie1->overview = $movie1overview;
// var_dump($movie1);

$movie2 = new Movie("Bastardi senza gloria", ["Azione", "Guerra"], "Quentin Tarantino");
// var_dump($movie2);

// creo un array di Movie
$movies = [
    $movie1, 
    $movie2
];
// var_dump(($movies));