<?php


namespace Entity;


class Client {
    
    /**
     *
     * @var int
     */
    private $idclient;
    
    
    /**
     *
     * @var string
     */
    private $company;
    
    private $description;
        
    private $lastname;
    
    private $firstname;
    
    private $phone;
    
    private $email;
    
    private $address;
    
    private $city;

    private $country;
    
    private $status = 'user';
    
   /**
    *
    * @var img
    */
    private $picture;
   
   
    
    /***********G E T T E R************/
    
    function getIdclient() {
        return $this->idclient;
    }

    function getCompany() {
        return $this->company;
    }
    
    public function getDescription() {
        return $this->description;
    }

    function getLastname() {
        return $this->lastname;
    }

    function getFirstname() {
        return $this->firstname;
    }

    function getPhone() {
        return $this->phone;
    }
    
     function getEmail() {
        return $this->email;
    }
    
     function getAddress() {
        return $this->address;
    }
    
     public function getCity() {
        return $this->city;
    }

    function getCountry() {
        return $this->country;
    }


    function getStatus() {
        return $this->status;
    }

    function getPicture(){
        return $this->picture;
    }

    function getFullName(){
        return $this->lastname.' '.$this->firstname;
    }
    
    /***********s E T T E R************/
    
    function setIdclient($idclient) {
        $this->idclient = $idclient;
        return $this;
    }

    function setCompany($company) {
        $this->company = $company;
        
        return $this;
    }
    
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    function setLastname($lastname) {
        $this->lastname = $lastname;
        
        return $this;
    }

    function setFirstname($firstname) {
        $this->firstname = $firstname;
        
        return $this;
    }

    function setPhone($phone) {
        $this->phone = $phone;
        
        return $this;
    }
    
    function setEmail($mail) {
        $this->email = $mail;
        
        return $this;
    }
    
     function setAddress($address) {
        $this->address = $address;
        
        return $this;
    }
    
    public function setCity($city) {
        $this->city = $city;
        return $this;
    }

    function setCountry($country) {
        $this->country = $country;
        
        return $this;
    }

    function setStatus($status) {
        $this->status = $status;
        
        return $this;
    }

    function setPicture($picture) {
        $this->picture = $picture;
        
        return $this;
    }
    
}
