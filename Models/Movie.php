<?php

/**
     * classe che rappresenta un singolo film
     */
    class Movie {

        public $title;
        public $genres;
        public $overview;
        public $director;

                
        /**
         * __construct
         *
         * @param  string $_title
         * @param  string $_genre
         * @param string $_overview
         */
        function __construct($_title, array $_genres, $_director) {
            $this->title = $_title;
            $this->genres = $_genres;
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