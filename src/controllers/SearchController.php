<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/UserPhoto.php';
require_once __DIR__ . '/../repository/UserPhotoRepository.php';
require_once __DIR__ . '/../repository/UserInfoRepository.php';
require_once __DIR__ . '/../models/UserInfo.php';

class SearchController extends AppController {
  private $id;
  private $userPhotoRepository;
  private $userInfoRepository;

  public function __construct() {
    parent::__construct();
    $this->userPhotoRepository = new UserPhotoRepository();
    $this->userInfoRepository = new UserInfoRepository();
    session_start();
  }

  public function search() {
    if (!isset($_SESSION['id']) || empty($_SESSION['id'])) {
      header("Location: login");
      exit;
    }

    $this->id = $_SESSION['id'];
    $photo = $this->userPhotoRepository->getPhoto($this->id);
    $userInfo = $this->userInfoRepository->getUserInfo($this->id);

    return $this->render('search', ['photo' => $photo, 'userInfo' => $userInfo]);
  }
}
