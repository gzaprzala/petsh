<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/UserPhoto.php';
require_once __DIR__ . '/../models/UserInfo.php';
require_once __DIR__ . '/../models/UserAnimal.php';
require_once __DIR__ . '/../models/UserAnimalInfo.php';
require_once __DIR__ . '/../models/AdminPanel.php';
require_once __DIR__ . '/../repository/UserRepository.php';
require_once __DIR__ . '/../repository/UserPhotoRepository.php';
require_once __DIR__ . '/../repository/UserInfoRepository.php';
require_once __DIR__ . '/../repository/UserAnimalRepository.php';
require_once __DIR__ . '/../repository/UserAnimalInfoRepository.php';

class ProfileController extends AppController {
  const MAX_FILE_SIZE = 1024 * 1024;
  const SUPPORTED_TYPES = ['image/png', 'image/jpeg'];
  const UPLOAD_DIRECTORY = '/../public/uploads/';

  private $messages = [];
  private $id;
  private $userPhotoRepository;
  private $userInfoRepository;
  private $userAnimalRepository;
  private $userAnimalInfoRepository;
  private $userRepository;

  public function __construct() {
    parent::__construct();
    $this->userPhotoRepository = new UserPhotoRepository();
    $this->userInfoRepository = new UserInfoRepository();
    $this->userAnimalRepository = new UserAnimalRepository();
    $this->userAnimalInfoRepository = new UserAnimalInfoRepository();
    $this->userRepository = new UserRepository();
    session_start();
  }

  public function profile() {
    if (!isset($_SESSION['id']) || empty($_SESSION['id'])) {
      header("Location: login");
      exit;
    }

    $this->id = $_SESSION['id'];
    $photo = $this->userPhotoRepository->getPhoto($this->id);
    $userInfo = $this->userInfoRepository->getUserInfo($this->id);
    $adminPanel = $this->userRepository->getAllUsersInfoFromView();

    return $this->render('profile', ['photo' => $photo, 'userInfo' => $userInfo, 'adminPanel' => $adminPanel]);
  }

  public function animal() {
    if (!isset($_SESSION['id']) || empty($_SESSION['id'])) {
      header("Location: login");
      exit;
    }

    $this->id = $_SESSION['id'];
    $userAnimal = $this->userAnimalRepository->getPhoto($this->id);
    $userAnimalInfo = $this->userAnimalInfoRepository->getUserAnimalInfo($this->id);

    return $this->render('animal', ['userAnimal' => $userAnimal, 'userAnimalInfo' => $userAnimalInfo]);
  }

  public function photoUpload() {
    $this->id = $_SESSION['id'];
    if ($this->isPost() && is_uploaded_file($_FILES['file']['tmp_name']) && $this->validate($_FILES['file'])) {
      move_uploaded_file(
        $_FILES['file']['tmp_name'],
        dirname(__DIR__) . self::UPLOAD_DIRECTORY . $_FILES['file']['name']
      );

      $photo = new UserPhoto($_FILES['file']['name']);
      $this->userPhotoRepository->addPhoto($photo, $this->id);

      return $this->profile();
    }
    return $this->render('profile', ['messages' => $this->messages]);
  }

  public function userInfoUpload() {
    $this->id = $_SESSION['id'];
    $userInfo = new UserInfo($_POST['name'], $_POST['age'], $_POST['city']);
    $this->userInfoRepository->addUserInfo($userInfo, $this->id);

    return $this->profile();
  }

  public function userAnimalUpload() {
    $this->id = $_SESSION['id'];
    $userAnimal = new UserAnimal($_POST['animal']);
    $this->userAnimalRepository->addPhoto($userAnimal, $this->id);

    return $this->animal();
  }

  public function userAnimalInfoUpload() {
    $this->id = $_SESSION['id'];
    $userAnimal = new UserAnimalInfo($_POST['name'], $_POST['age']);
    $this->userAnimalInfoRepository->addUserAnimalInfo($userAnimal, $this->id);

    return $this->animal();
  }

  private function validate(array $file): bool {
    if ($file['size'] > self::MAX_FILE_SIZE) {
      $this->messages[] = 'File is too large for destination file system.';
      return false;
    }

    if (!isset($file['type']) || !in_array($file['type'], self::SUPPORTED_TYPES)) {
      $this->messages[] = 'File type is not supported.';
      return false;
    }
    return true;
  }
}
