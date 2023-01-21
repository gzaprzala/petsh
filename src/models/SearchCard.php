<?php

class SearchCard {
  private $id;
  private $personName;
  private $personAge;
  private $personCity;
  private $personPhoto;
  private $personAnimalName;
  private $personAnimalAge;
  private $personAnimalPhoto;

  public function __construct(int $id, string $personName, int $personAge, string $personCity, string $personPhoto, string $personAnimalName, int $personAnimalAge, string $personAnimalPhoto) {
    $this->id = $id;
    $this->personName = $personName;
    $this->personAge = $personAge;
    $this->personCity = $personCity;
    $this->personPhoto = $personPhoto;
    $this->personAnimalName = $personAnimalName;
    $this->personAnimalAge = $personAnimalAge;
    $this->personAnimalPhoto = $personAnimalPhoto;
  }

  public function getId(): int {
    return $this->id;
  }

  public function getPersonName(): string {
    return $this->personName;
  }

  public function getPersonAge(): int {
    return $this->personAge;
  }

  public function getPersonCity(): string {
    return $this->personCity;
  }

  public function getPersonPhoto(): string {
    return $this->personPhoto;
  }

  public function getPersonAnimalName(): string {
    return $this->personAnimalName;
  }

  public function getPersonAnimalAge(): int {
    return $this->personAnimalAge;
  }

  public function getPersonAnimalPhoto(): string {
    return $this->personAnimalPhoto;
  }
}
