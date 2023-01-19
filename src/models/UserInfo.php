<?php

class UserInfo extends User {
  private $name;
  private $age;
  private $city;

  public function __construct(string $name, int $age, string $city) {
    $this->name = $name;
    $this->age = $age;
    $this->city = $city;
  }

  public function getName(): string {
    return $this->name;
  }

  public function getAge(): int {
    return $this->age;
  }

  public function getCity(): string {
    return $this->city;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function setAge($age) {
    $this->age = $age;
  }

  public function setCity($city) {
    $this->city = $city;
  }
}
