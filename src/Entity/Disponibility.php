<?php

namespace Entity;

class Disponibility {
    
    private $idcountry;
    
    private $idproduct;
    
    function getIdcountry() {
        return $this->idcountry;
    }
    
    function getIdproduct() {
        return $this->idproduct;
    }

    function setIdcountry($idcountry) {
        $this->idcountry = $idcountry;
        return $this;
    }
    
    function setIdproduct($idproduct) {
        $this->idproduct = $idproduct;
        return $this;
    }


}
