<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/SearchCard.php';

class SearchCardsRepository extends Repository {
  public function getSearchCards(int $user_id): ?array {
    $stmt = $this->database->connect()->prepare('
      SELECT users.id as user_id, users_photos.photo, users_details.name, users_details.age,
      users_details.city, users_details.likes, users_details.dislikes, animals_photos.animal_photo, animals_details.animal_name,
      animals_details.animal_age
      FROM users
      JOIN users_photos ON users.id = users_photos.user_id
      JOIN users_details ON users.id = users_details.user_id
      JOIN animals_photos ON users.id = animals_photos.user_id
      JOIN animals_details ON users.id = animals_details.user_id
      WHERE users.id != :user_id
    ');

    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();

    $searchCards = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $searchCardsReturn = [];

    foreach ($searchCards as $searchCard) {
      $searchCardsReturn[] = new SearchCard(
        $searchCard['user_id'],
        $searchCard['name'],
        $searchCard['age'],
        $searchCard['city'],
        $searchCard['photo'],
        $searchCard['animal_name'],
        $searchCard['animal_age'],
        $searchCard['animal_photo'],
        $searchCard['likes'],
        $searchCard['dislikes']
      );
    }

    return $searchCardsReturn;
  }

  public function like(int $id) {
    $stmt = $this->database->connect()->prepare('
      UPDATE users_details
      SET likes = likes + 1
      WHERE user_id = :id
    ');

    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
  }

  public function dislike(int $id) {
    $stmt = $this->database->connect()->prepare('
      UPDATE users_details
      SET dislikes = dislikes + 1
      WHERE user_id = :id
    ');

    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
  }
}
