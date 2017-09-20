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
    
    private $field;
    
    private $content;
    
    private $status;
    
    private $summary;
    
    
    
    function getSummary() {
        return $this->summary;
    }

    function setSummary($summary) {
        $this->summary = $summary;
        
        return $this;
    }

        
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

        function getField() {
        return $this->field;
    }

    function getContent() {
        return $this->content;
    }

    function getStatus() {
        return $this->status;
    }
    
    /**********SETTER************/


    function setField($field) {
        $this->field = $field;
        
        return $this;
    }

    function setContent($content) {
        $this->content = $content;
        
        return $this;
    }

    function setStatus($status) {
        $this->status = $status;
        
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
