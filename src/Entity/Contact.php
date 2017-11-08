<?php

namespace Entity;

class Contact {
  
  private $idcontact;
  private $lastname;
  private $firstname;
  private $email;
  private $city;
  private $country;
  private $organisation;
  private $message;
  
  public function getIdcontact() {
    return $this->idcontact;
  }

  public function getLastname() {
    return $this->lastname;
  }

  public function getFirstname() {
    return $this->firstname;
  }

  public function getEmail() {
    return $this->email;
  }

  public function getCity() {
    return $this->city;
  }

  public function getCountry() {
    return $this->country;
  }
  
  public function getOrganisation() {
    return $this->organisation;
  }

  public function getMessage() {
    return $this->message;
  }

  public function setIdcontact($idcontact) {
    $this->idcontact = $idcontact;
    return $this;
  }

  public function setLastname($lastname) {
    $this->lastname = $lastname;
    return $this;
  }

  public function setFirstname($firstname) {
    $this->firstname = $firstname;
    return $this;
  }

  public function setEmail($email) {
    $this->email = $email;
    return $this;
  }

  public function setCity($city) {
    $this->city = $city;
    return $this;
  }

  public function setCountry($country) {
    $this->country = $country;
    return $this;
  }

  public function setOrganisation($organisation) {
    $this->organisation = $organisation;
    return $this;
  }

  public function setMessage($message) {
    $this->message = $message;
    return $this;
  }

}
