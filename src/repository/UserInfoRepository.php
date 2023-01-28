<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/UserInfo.php';

class UserInfoRepository extends Repository {
  public function getUserInfo(int $user_id): ?UserInfo {
    $stmt = $this->database->connect()->prepare('
      SELECT * FROM users_details WHERE user_id = :user_id
    ');

    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user == false) {
      return null;
    }

    return new UserInfo(
      $user['name'],
      $user['age'],
      $user['city'],
      $user['is_admin']
    );
  }

  public function addUserInfo(UserInfo $user, int $user_id): void {
    $stmt = $this->database->connect()->prepare('
      UPDATE users_details SET name = :name, age = :age, city = :city WHERE user_id = :user_id
    ');

    $stmt->bindParam(':name', $user->getName());
    $stmt->bindParam(':age', $user->getAge());
    $stmt->bindParam(':city', $user->getCity());
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);

    $stmt->execute();
  }
}
