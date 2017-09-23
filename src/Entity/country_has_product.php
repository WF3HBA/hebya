<?php



namespace Entity;


class country_has_product {
   
    public $idcountry;
    
    public $idproduit;
    
    function getIdcountry() {
        return $this->idcountry;
    }

    function getIdproduit() {
        return $this->idproduit;
    }

    function setIdcountry($idcountry) {
        $this->idcountry = $idcountry;
        
        return $this;
    }

    function setIdproduit($idproduit) {
        $this->idproduit = $idproduit;
        
        return $this;
    }


}
