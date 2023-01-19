<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/UserPhoto.php';

class UserPhotoRepository extends Repository {
  public function getPhoto(int $id): ?UserPhoto {
    $stmt = $this->database->connect()->prepare('
      SELECT * FROM users_photos WHERE id = :id
    ');
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    $personPhoto = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$personPhoto) {
      return null;
    }

    return new UserPhoto(
      $personPhoto['photo'],
    );
  }

  public function addPhoto(UserPhoto $personPhoto): void {
    $stmt = $this->database->connect()->prepare('
            INSERT INTO users_photos (id, user_id, person_photo)
            VALUES (?, ?, ?)
        ');


    $id = 1;
    $user_id = 1;

    $stmt->execute([
      $id,
      $user_id,
      $personPhoto->getPersonPhoto()
    ]);
  }
}
