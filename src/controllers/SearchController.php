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
  private $userPhotoRepository;
  private $userInfoRepository;
  private $userAnimalRepository;
  private $userAnimalInfoRepository;
  private $searchCardsRepository;

  public function __construct() {
    parent::__construct();
    // $this->userPhotoRepository = new UserPhotoRepository();
    // $this->userInfoRepository = new UserInfoRepository();
    // $this->userAnimalRepository = new UserAnimalRepository();
    // $this->userAnimalInfoRepository = new UserAnimalInfoRepository();
    $this->searchCardsRepository = new SearchCardsRepository();

    session_start();
  }

  public function search() {
    if (!isset($_SESSION['id']) || empty($_SESSION['id'])) {
      header("Location: login");
      exit;
    }

    $this->id = $_SESSION['id'];
    // $photo = $this->userPhotoRepository->getPhoto($this->id);
    // $userInfo = $this->userInfoRepository->getUserInfo($this->id);
    // $userAnimal = $this->userAnimalRepository->getPhoto($this->id);
    // $userAnimalInfo = $this->userAnimalInfoRepository->getUserAnimalInfo($this->id);
    $searchCards = $this->searchCardsRepository->getSearchCards($this->id);

    return $this->render('search', ['searchCards' => $searchCards]);
  }
}
