<?php



namespace Entity;


class Candidacy {
    
    private $idcandidacy;
    private $firstname;
    private $lastname;
    private $email;
    private $phone;
    private $adresse;
    private $country;
    
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

    public function getAdresse() {
        return $this->adresse;
    }

    public function getCountry() {
        return $this->country;
    }

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

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
        return $this;
    }

    public function setCountry($country) {
        $this->country = $country;
        return $this;
    }


}
