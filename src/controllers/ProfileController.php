<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/UserPhoto.php';
require_once __DIR__ . '/../repository/UserPhotoRepository.php';
require_once __DIR__ . '/../repository/UserInfoRepository.php';
require_once __DIR__ . '/../models/UserInfo.php';

class ProfileController extends AppController {
  const MAX_FILE_SIZE = 1024 * 1024;
  const SUPPORTED_TYPES = ['image/png', 'image/jpeg'];
  const UPLOAD_DIRECTORY = '/../public/uploads/';

  private $messages = [];
  private $id;
  private $userPhotoRepository;
  private $userInfoRepository;

  public function __construct() {
    parent::__construct();
    $this->userPhotoRepository = new UserPhotoRepository();
    $this->userInfoRepository = new UserInfoRepository();
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

    return $this->render('profile', ['photo' => $photo, 'userInfo' => $userInfo]);
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
