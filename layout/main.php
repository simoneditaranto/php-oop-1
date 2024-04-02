<main>
   
    <div class="container border border-primary rounded-3">

        <h1>Movies</h1>

        <ul>
            
            <?php
                foreach($movies as $movie) {
                    echo "
                    <li>
                        " . $movie->title . "
                    "
            ?>
            <ul>
            
            <!-- generi -->
            <?php
                foreach($movie->genres as $genre) {
                    echo "
                    <li>
                        " . $genre . "
                    </li>";
                }
            ?>
            </ul>

            <?php
                echo " Regista: 
                    " . $movie->director->getInfo() . 
                    "<br> Trama: " . $movie->getOverview() . "
                </li>";
                }
            ?>
        </ul>

    </div>
    
</main>