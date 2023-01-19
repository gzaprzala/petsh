<?php

class UserPhoto {
  private $personPhoto;

  public function __construct($personPhoto) {
    $this->personPhoto = $personPhoto;
  }

  public function getPersonPhoto() {
    return $this->personPhoto;
  }

  public function setPersonPhoto($personPhoto) {
    $this->personPhoto = $personPhoto;
  }
}
