<?php



namespace Entity;


class Candidacy {
    
    private $idcandidacy;
    private $firstname;
    private $lastname;
    private $email;
    private $phone;
    private $address;
    private $country;
    private $opportunity;
    private $cv;
    private $coverletter;
    
    
    public function getIdcandidacy() {
        return $this->idcandidacy;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getCountry() {
        return $this->country;
    }
    
    public function getOpportunity() {
        return $this->opportunity;
    }
   
    
    public function getCv() {
        return $this->cv;
    }
    
    
    public function getCoverletter() {
        return $this->coverletter;
    }
    
    
    /*********************** SETTER  ********************** */

    public function setIdcandidacy($idcandidacy) {
        $this->idcandidacy = $idcandidacy;
        return $this;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
        return $this;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
        return $this;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
        return $this;
    }

    public function setAddress($address) {
        $this->address = $address;
        return $this;
    }

    public function setCountry($country) {
        $this->country = $country;
        return $this;
    }
    
     public function setOpportunity(Opportunity $opportunity) {
        $this->opportunity = $opportunity;
        return $this;
    }
    
    public function setCv($cv) {
        $this->cv = $cv;
        return $this;
    }
    
    public function setCoverletter($coverletter) {
        $this->coverletter = $coverletter;
        return $this;
    }
    
    
    
    
    
    
    
    public function getOpportunityReference() {
        if (!is_null($this->opportunity)) {
            return $this->opportunity->getReference();
        }
        
        return '';
    }
    
    public function getIdOpportunity() {
        if (!is_null($this->opportunity)) {
            return $this->opportunity->getIdopportunity();
        }
        
        return '';
    }

}
