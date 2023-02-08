<?php

class User {
  private $username;
  private $email;
  private $password;
  private $id;

  public function __construct(string $username, string $email, string $password, int $id) {
    $this->username = $username;
    $this->email = $email;
    $this->password = $password;
    $this->id = $id;
  }

  public function getUsername(): string {
    return $this->username;
  }

  public function getEmail(): string {
    return $this->email;
  }

  public function getPassword() {
    return $this->password;
  }

  public function getId() {
    return $this->id;
  }
}
