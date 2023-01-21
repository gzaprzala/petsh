<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/User.php';

class UserRepository extends Repository {
  public function getUser(string $username): ?User {
    $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users WHERE username = :username
        ');
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
      return null;
    }

    return new User(
      $user['username'],
      $user['password'],
      $user['id']
    );
  }

  public function addUser(User $user) {
    $stmt = $this->database->connect()->prepare('
      INSERT INTO users (username, password)
      VALUES (?, ?)
      RETURNING id;
    ');

    $stmt->execute([
      $user->getUsername(),
      $user->getPassword()
    ]);

    $id = $stmt->fetchColumn();

    $stmt = $this->database->connect()->prepare('
      INSERT INTO users_photos (user_id)
      VALUES (?)
    ');

    $stmt->execute([
      $id
    ]);

    $stmt = $this->database->connect()->prepare('
      INSERT INTO users_details (user_id)
      VALUES (?)
    ');

    $stmt->execute([
      $id
    ]);

    $stmt = $this->database->connect()->prepare('
      INSERT INTO animals_photos (user_id)
      VALUES (?)
    ');

    $stmt->execute([
      $id
    ]);
  }
}
