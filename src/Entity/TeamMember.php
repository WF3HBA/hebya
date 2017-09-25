<?php

namespace Entity;

class TeamMember {
    
    private $idteam_member;
    
    private $firstname;
    
    private $lastname;
    
    private $title;
    
    private $description;
    
    private $linkedin;
    
    private $picture;
    

        
    /******  G E T T E R  ******/
    
    function getIdteam_member() {
        return $this->idteam_member;
    }

    function getFirstname() {
        return $this->firstname;
    }

    function getLastname() {
        return $this->lastname;
    }

    function getTitle() {
        return $this->title;
    }

    function getDescription() {
        return $this->description;
    }

    function getLinkedin() {
        return $this->linkedin;
    }
    
    public function getPicture() {
        return $this->picture;
    }
    
     /******  S E T T E R  ******/

    function setIdteam_member($idteam_member) {
        $this->idteam_member = $idteam_member;
        
        return $this;
    }

    function setFirstname($firstname) {
        $this->firstname = $firstname;
        
        return $this;
    }

    function setLastname($lastname) {
        $this->lastname = $lastname;
        
        return $this;
    }

    function setTitle($title) {
        $this->title = $title;
        
        return $this;
    }

    function setDescription($description) {
        $this->description = $description;
        
        return $this;
    }

    function setLinkedin($linkedin) {
        $this->linkedin = $linkedin;
        
        return $this;
    }
    
    public function setPicture($picture) {
        $this->picture = $picture;
        return $this;
    }
    
    public function getFullName() {
        
        return $this->firstname . ' ' . $this->lastname;
        
    }

}
