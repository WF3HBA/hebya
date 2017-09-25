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
    
    private $contact_name;
    
    private $contact_email;
    
    private $contact_phone;
    
    private $contact_address;
    
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

     function getContact_name() {
        return $this->contact_name;
    }

    function getContact_email() {
        return $this->contact_email;
    }

    function getContact_phone() {
        return $this->contact_phone;
    }

    function getContact_address() {
        return $this->contact_address;
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
    
   

    function setContact_name($contact_name) {
        $this->contact_name = $contact_name;
        
         return $this;
    }

    function setContact_email($contact_email) {
        $this->contact_email = $contact_email;
        
         return $this;
    }

    function setContact_phone($contact_phone) {
        $this->contact_phone = $contact_phone;
        
         return $this;
    }

    function setContact_address($contact_address) {
        $this->contact_address = $contact_address;
        
         return $this;
    }


}
