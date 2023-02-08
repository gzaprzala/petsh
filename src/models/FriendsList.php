<?php

class FriendsList {
  private $id;
  private $name;
  private $personPhoto;

  public function __construct(int $id, string $name, string $personPhoto) {
    $this->id = $id;
    $this->name = $name;
    $this->personPhoto = $personPhoto;
  }

  public function getId(): int {
    return $this->id;
  }

  public function getName(): string {
    return $this->name;
  }

  public function getPersonPhoto(): string {
    return $this->personPhoto;
  }
}
