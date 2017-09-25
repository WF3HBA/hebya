<?php



namespace Entity;


class Provider {
    
    /**
     *
     * @var int
     */
    private $idprovider;
    
    
    /**
     *
     * @var string
     */
    private $lastname;
    
    private $firstname;
    
    private $company;
    
    private $summary;
    
    private $description;
    
    private $email;
    
    private $phone;
    
    private $address;
    
    private $city;
    
     private $country;
     
     private $picture;
     
     private $status;

     

    /***GETTER****/
     
    function getIdprovider() {
        return $this->idprovider;
    }

    function getLastname() {
        return $this->lastname;
    }

    function getFirstname() {
        return $this->firstname;
    }

    function getCompany() {
        return $this->company;
    }

    function getEmail() {
        return $this->email;
    }

    function getPhone() {
        return $this->phone;
    }

    function getAddress() {
        return $this->address;
    }
     
    function getCity() {
         return $this->city;
     }

    function getCountry() {
        return $this->country;
    }

    function getSummary() {
        return $this->summary;
    }

    function getDescription() {
        return $this->description;
    }

    function getPicture() {
        return $this->picture;
    }
    
     public function getStatus() {
         return $this->status;
     }
     
     public function getFullName() {
        return $this->firstname . ' ' . $this->lastname;
    }

        
    /**********SETTER************/
    
    
    function setIdprovider($idprovider) {
        $this->idprovider = $idprovider;
        
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

    function setCompany($company) {
        $this->company = $company;
        
        return $this;
    }

    function setEmail($email) {
        $this->email = $email;
        
        return $this;
    }

    function setPhone($phone) {
        $this->phone = $phone;
        
        return $this;
    }

    function setAddress($address) {
        $this->address = $address;
        
        return $this;
    }
    
    function setCity($city) {
         $this->city = $city;
         return $this;
     }

    function setCountry($country) {
        $this->country = $country;
        
        return $this;
    }
    
    function setSummary($summary) {
        $this->summary = $summary;
        
        return $this;
    }

    function setDescription($description) {
        $this->description = $description;
        
        return $this;
    }

    function setPicture($picture) {
        $this->picture = $picture;
        
        return $this;
    }
    
    public function setStatus($status) {
         $this->status = $status;
         return $this;
     }
    
}
