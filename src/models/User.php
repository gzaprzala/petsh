<?php

class User {
  private $username;
  private $password;
  private $id;

  public function __construct(string $username, string $password, int $id) {
    $this->username = $username;
    $this->password = $password;
    $this->id = $id;
  }

  public function getUsername(): string {
    return $this->username;
  }

  public function getPassword() {
    return $this->password;
  }

  public function getId() {
    return $this->id;
  }

  public function setId(int $id) {
    $this->id = $id;
  }
}
