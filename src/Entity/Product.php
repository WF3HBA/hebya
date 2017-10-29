<?php

namespace Entity;

class Product {

  private $idproduct;
  private $idprovider;
  private $name;
  private $website;
  private $provider;
  private $field;
  private $description;
  private $picture;
  private $status;
  private $summary;

  /*   * *GETTER*** */

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

  function getSummary() {
    return $this->summary;
  }

  function getDescription() {
    return $this->description;
  }

  public function getPicture() {
    return $this->picture;
  }

  function getStatus() {
    return $this->status;
  }

  /*   * ********SETTER*********** */

  function setField($field) {
    $this->field = $field;

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

  public function setPicture($picture) {
    $this->picture = $picture;
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

  function getProviderCompany() {
    if (!is_null($this->provider)) {
      return $this->provider->getCompany();
    }

    return '';
  }

}
