<?php

namespace Entity;

class Country {
    
    
    /**
     *
     * @var int
     */
    private $idcountry;
    
    private $name;
    
    /**
     *
     * @var string
     */
    private $content;
    
    private $continent;
    
    
    /***GETTER****/
    
    function getIdcountry() {
        return $this->idcountry;
    }

    function getContent() {
        return $this->content;
    }

    function getName() {
        return $this->name;
    }

    function getContinent() {
        return $this->continent;
    }

    
    /**********SETTER************/
    
    function setIdcountry($idcountry) {
        $this->idcountry = $idcountry;
        
        return $this;
    }

    function setContent($content) {
        $this->content = $content;
        
        return $this;
    }

    function setName($name) {
        $this->name = $name;
        
        return $this;
    }

    function setContinent($continent) {
        $this->continent = $continent;
        
        return $this;
    }
    
    
}
