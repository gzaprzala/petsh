<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/UserAnimal.php';

class UserAnimalRepository extends Repository {
  public function getPhoto(int $user_id): ?UserAnimal {
    $stmt = $this->database->connect()->prepare('
      SELECT * FROM animals_photos WHERE user_id = :user_id
    ');
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();

    $photo = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($photo == false) {
      return null;
    }

    return new UserAnimal(
      $photo['animal_photo'],
    );
  }

  public function addPhoto(UserAnimal $photo, int $user_id): void {
    $stmt = $this->database->connect()->prepare('
      UPDATE animals_photos SET animal_photo = :photo WHERE user_id = :user_id
    ');

    $stmt->bindParam(':photo', $photo->getPhoto());
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);

    $stmt->execute();
  }
}
