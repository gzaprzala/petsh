<?php

class FriendsList {
  private $id;
  private $personPhoto;

  public function __construct(int $id, string $personPhoto) {
    $this->id = $id;
    $this->personPhoto = $personPhoto;
  }

  public function getId(): int {
    return $this->id;
  }

  public function getPersonPhoto(): string {
    return $this->personPhoto;
  }
}
