<?php

/**
 * classe che rappresenta il regista di un film
 */
class Director {

    public $firstName;
    public $secondName;
    public $nationality;
    
    /**
     * __construct
     *
     * @param  string $_firstName
     * @param  string $_secondName
     * @param  string $_nationality
     */
    function __construct($_firstName, $_secondName, $_nationality) {
        $this->firstName = $_firstName;
        $this->secondName = $_secondName;
        $this->nationality = $_nationality;
    }

    public function getInfo() {
        return $this->firstName . ' ' . $this->secondName . ', ' . $this->nationality;
    }
    
}