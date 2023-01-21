<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/UserAnimalInfo.php';

class UserAnimalInfoRepository extends Repository {
  public function getUserAnimalInfo(int $user_id): ?UserAnimalInfo {
    $stmt = $this->database->connect()->prepare('
      SELECT * FROM animals_details WHERE user_id = :user_id
    ');

    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user == false) {
      return null;
    }

    return new UserAnimalInfo(
      $user['animal_name'],
      $user['animal_age'],
    );
  }

  public function addUserAnimalInfo(UserAnimalInfo $user, int $user_id): void {
    $stmt = $this->database->connect()->prepare('
      UPDATE animals_details SET animal_name = :name, animal_age = :age WHERE user_id = :user_id
    ');

    $stmt->bindParam(':name', $user->getName());
    $stmt->bindParam(':age', $user->getAge());
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);

    $stmt->execute();
  }
}
