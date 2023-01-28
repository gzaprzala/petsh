<?php

class AdminPanel {
  private $id;
  private $username;
  private $name;
  private $age;
  private $city;

  public function __construct(int $id, string $username, string $name, int $age, string $city) {
    $this->id = $id;
    $this->username = $username;
    $this->name = $name;
    $this->age = $age;
    $this->city = $city;
  }

  public function getId(): int {
    return $this->id;
  }

  public function getUsername(): string {
    return $this->username;
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
}
