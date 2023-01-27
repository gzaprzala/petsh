<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/UserPhoto.php';
require_once __DIR__ . '/../models/UserInfo.php';
require_once __DIR__ . '/../models/UserAnimal.php';
require_once __DIR__ . '/../models/UserAnimalInfo.php';
require_once __DIR__ . '/../models/SearchCard.php';
require_once __DIR__ . '/../repository/UserPhotoRepository.php';
require_once __DIR__ . '/../repository/UserInfoRepository.php';
require_once __DIR__ . '/../repository/UserAnimalRepository.php';
require_once __DIR__ . '/../repository/UserAnimalInfoRepository.php';
require_once __DIR__ . '/../repository/SearchCardsRepository.php';


class SearchController extends AppController {
  private $id;
  private $searchCardsRepository;

  public function __construct() {
    parent::__construct();
    $this->searchCardsRepository = new SearchCardsRepository();

    session_start();
  }

  public function search() {
    if (!isset($_SESSION['id']) || empty($_SESSION['id'])) {
      header("Location: login");
      exit;
    }

    $this->id = $_SESSION['id'];
    $searchCards = $this->searchCardsRepository->getSearchCards($this->id);

    return $this->render('search', ['searchCards' => $searchCards]);
  }

  public function like(int $id) {
    $this->searchCardsRepository->like($id);
    http_response_code(200);
  }

  public function dislike(int $id) {
    $this->searchCardsRepository->dislike($id);
    http_response_code(200);
  }
}
