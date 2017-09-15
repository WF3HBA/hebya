<?php

namespace Entity;

class Country {
    
    
    /**
     *
     * @var int
     */
    private $idcountry;
   
 
    private $idlangage;
    
    
    /**
     *
     * @var string
     */
    private $content;
    
    private $country_name;
    
    private $continent;
    
    
    
    
    /***GETTER****/
    
    function getIdcountry() {
        return $this->idcountry;
    }

    function getIdlangage() {
        return $this->idlangage;
    }

    function getContent() {
        return $this->content;
    }

    function getCountry_name() {
        return $this->country_name;
    }

    function getContinent() {
        return $this->continent;
    }

    
    /**********SETTER************/
    
    function setIdcountry($idcountry) {
        $this->idcountry = $idcountry;
        
        return $this;
    }

    function setIdlangage($idlangage) {
        $this->idlangage = $idlangage;
        
        return $this;
    }

    function setContent($content) {
        $this->content = $content;
        
        return $this;
    }

    function setCountry_name($country_name) {
        $this->country_name = $country_name;
        
        return $this;
    }

    function setContinent($continent) {
        $this->continent = $continent;
        
        return $this;
    }


    
    
}
