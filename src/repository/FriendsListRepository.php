<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/FriendsList.php';

class FriendsListRepository extends Repository {
  public function getFriendsList(int $user_id): ?array {
    $stmt = $this->database->connect()->prepare('
      SELECT users.id as user_id, users_details.name, users_photos.photo
      FROM users
      JOIN users_photos ON users.id = users_photos.user_id
      JOIN users_details ON users.id = users_details.user_id
      WHERE users.id != :user_id
    ');

    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();

    $friendsList = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $friendsListReturn = [];

    foreach ($friendsList as $friend) {
      $friendsListReturn[] = new FriendsList(
        $friend['user_id'],
        $friend['name'],
        $friend['photo']
      );
    }

    return $friendsListReturn;
  }
}
