<?php



namespace Entity;


class Product {
    /**
     *
     * @var int 
     */
    private $idproduct;
    
     private $idprovider;
    /**
     *
     * @var string
     */
    private $name;
    
    private $website;
    
    private $company;
    
     /***GETTER****/
    
    function getIdproduct() {
        return $this->idproduct;
    }
    
    function getCompany() {
        return $this->company;
    }

    function getIdprovider() {
        return $this->idprovider;
    }

    function getName() {
        return $this->name;
    }

    function getWebsite() {
        return $this->website;
    }

    
    /**********SETTER************/
    
     function setCompany(Provider $company) {
        $this->company = $company;
        
        return $this;
    }
    
    function setIdproduct($idproduct) {
        $this->idproduct = $idproduct;
        
        return $this;
    }

    function setIdprovider($idprovider) {
        $this->idprovider = $idprovider;
        
        return $this;
    }

    function setName($name) {
        $this->name = $name;
        
        return $this;
    }

    function setWebsite($website) {
        $this->website = $website;
        
        return $this;
    }

    
}
