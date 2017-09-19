<?php



namespace Entity;

class Opportunity {
    
    private $idopportunity;
    
    private $title;
    
    private $reference;
    
    private $city;
    
    private $field;
    
    private $contract_type;
    
    private $publication_date;
    
    private $hiring_date;
    
    private $required_skills;    
    
    private $description;
    
    private $salary;
    
    private $idcountry;
    
    private $country;
    
    
    /*************** GETTER *************** */
    public function getIdopportunity() {
        return $this->idopportunity;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getReference() {
        return $this->reference;
    }

    public function getCity() {
        return $this->city;
    }

    public function getField() {
        return $this->field;
    }

    public function getContract_type() {
        return $this->contract_type;
    }

    public function getPublication_date() {
        return $this->publication_date;
    }

    public function getHiring_date() {
        return $this->hiring_date;
    }

    public function getRequired_skills() {
        return $this->required_skills;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function getIdcountry() {
        return $this->idcountry;
    }

    public function getCountry() {
        return $this->country;
    }
    
/*************** SETTER *************** */
    
    public function setIdopportunity($idopportunity) {
        $this->idopportunity = $idopportunity;
        return $this;
    }

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    public function setReference($reference) {
        $this->reference = $reference;
        return $this;
    }

    public function setCity($city) {
        $this->city = $city;
        return $this;
    }

    public function setField($field) {
        $this->field = $field;
        return $this;
    }

    public function setContract_type($contract_type) {
        $this->contract_type = $contract_type;
        return $this;
    }

    public function setPublication_date($publication_date) {
        $this->publication_date = $publication_date;
        return $this;
    }

    public function setHiring_date($hiring_date) {
        $this->hiring_date = $hiring_date;
        return $this;
    }

    public function setRequired_skills($required_skills) {
        $this->required_skills = $required_skills;
        return $this;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
        return $this;
    }

    public function setIdcountry($idcountry) {
        $this->idcountry = $idcountry;
        return $this;
    }

    public function setCountry(Country $country) {
        $this->country = $country;
        
        return $this;
    }

    public function getCountryName(){
        if (!is_null($this->country)) {
            return $this->country->getName();
        }
        
        return '';
    }
    
}
