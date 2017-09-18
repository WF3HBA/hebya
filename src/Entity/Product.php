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
    
    private $provider;
    
     /***GETTER****/
    
    function getIdproduct() {
        return $this->idproduct;
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
      
    function getProvider() {
        return $this->provider;
    }

    
    /**********SETTER************/
    
    
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
    
    function setProvider(Provider $provider) {
        $this->provider = $provider;
        
        return $this;
    }
    
    function getProviderCompany(){
        if (!is_null($this->provider)) {
            return $this->provider->getCompany();
        }
        
        return '';
    }
    
}
