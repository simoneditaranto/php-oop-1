<?php

        
    /**
     * classe che rappresenta un singolo film
     */
    class Movie {

        public $title;
        public $genre;
        public $overview;
        public $director;

                
        /**
         * __construct
         *
         * @param  string $_title
         * @param  string $_genre
         * @param string $_overview
         */
        function __construct($_title, $_genre, $_director) {
            $this->title = $_title;
            $this->genre = $_genre;
            $this->director = $_director;
        }
        
        /**
         * getOverview
         * metodo che ritorna la tram del film
         * @return string
         */
        public function getOverview() {
            return $this->overview;
        }

    }

    // creo due istanze di Movie
    $movie1 = new Movie("Pulp Fiction", "[Pulp, crime]", "Quentin Tarantino");
    $movie1overview = "Una serie di storie intrecciate che raccontano la vita di criminali, gangster e pugili nella Los Angeles del 1994.";
    $movie1->overview = $movie1overview;
    // var_dump($movie1);

    $movie2 = new Movie("Bastardi senza gloria", "[Azione, guerra]", "Quentin Tarantino");
    // var_dump($movie2);

    // creo un array di Movie
    $movies = [
        $movie1, 
        $movie2
    ];
    var_dump(($movies));

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <div class="container">

        <h1>Movies</h1>

        <ul>

            <?php

                foreach($movies as $movie) {

                    echo "
                    <li>
                        " . $movie->title . ", " . $movie->genre . ", " . $movie->director . " <br>
                        Trama: " . $movie->getOverview() . "

                    </li>";

                }

            ?>

        </ul>

    </div>




    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>