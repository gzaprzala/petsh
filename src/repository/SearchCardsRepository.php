<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/SearchCard.php';

class SearchCardsRepository extends Repository {
  public function getSearchCards(int $user_id): ?array {
    $searchCardsReturn = [];
    $stmt = $this->database->connect()->prepare('
      SELECT users.id as user_id, users_photos.photo, users_details.name, users_details.age,
      users_details.city, animals_photos.animal_photo, animals_details.animal_name,
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
      );
    }

    return $searchCardsReturn;
  }
}
