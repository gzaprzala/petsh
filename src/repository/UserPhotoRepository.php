<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/UserPhoto.php';

class UserPhotoRepository extends Repository {
  public function getPhoto(int $user_id): ?UserPhoto {
    $stmt = $this->database->connect()->prepare('
      SELECT * FROM users_photos WHERE user_id = :user_id
    ');
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();

    $photo = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($photo == false) {
      return null;
    }

    return new UserPhoto(
      $photo['photo'],
    );
  }

  public function addPhoto(UserPhoto $photo, int $user_id): void {
    $stmt = $this->database->connect()->prepare('
      UPDATE users_photos SET photo = :photo WHERE user_id = :user_id
    ');

    $stmt->bindParam(':photo', $photo->getPhoto());
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);

    $stmt->execute();
  }
}
