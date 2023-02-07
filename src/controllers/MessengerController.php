<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/UserPhoto.php';
require_once __DIR__ . '/../models/UserInfo.php';
require_once __DIR__ . '/../models/FriendsList.php';
require_once __DIR__ . '/../models/FriendsMessage.php';
require_once __DIR__ . '/../repository/UserPhotoRepository.php';
require_once __DIR__ . '/../repository/UserInfoRepository.php';
require_once __DIR__ . '/../repository/FriendsListRepository.php';
require_once __DIR__ . '/../repository/FriendsMessagesRepository.php';

class MessengerController extends AppController {
  private $id;
  private $userPhotoRepository;
  private $userInfoRepository;
  private $friendsListRepository;
  private $friendsMessagesRepository;

  public function __construct() {
    parent::__construct();
    $this->userPhotoRepository = new UserPhotoRepository();
    $this->userInfoRepository = new UserInfoRepository();
    $this->friendsListRepository = new FriendsListRepository();
    $this->friendsMessagesRepository = new FriendsMessagesRepository();
  }

  public function chat() {
    if (!isset($_COOKIE['id']) || empty($_COOKIE['id'])) {
      header("Location: login");
      exit;
    }

    $this->id = $_COOKIE['id'];
    $receiver_id = (int)$_GET['room'];
    $photo = $this->userPhotoRepository->getPhoto($this->id);
    $userInfo = $this->userInfoRepository->getUserInfo($this->id);
    $friendsList = $this->friendsListRepository->getFriendsList($this->id);
    $friendsMessage = $this->friendsMessagesRepository->getFriendsMessages($this->id, $receiver_id);

    $this->render('chat', ['photo' => $photo, 'userInfo' => $userInfo, 'friendsList' => $friendsList, 'friendsMessage' => $friendsMessage]);
  }

  public function addMessage() {
    if (!isset($_COOKIE['id']) || empty($_COOKIE['id'])) {
      header("Location: login");
      exit;
    }

    $this->id = $_COOKIE['id'];
    $message = $_POST['message_content'];
    $receiver_id = (int)$_POST['receiver_id'];

    $friendsMessage = new FriendsMessage($this->id, $receiver_id, $message);
    $this->friendsMessagesRepository->addFriendsMessage($friendsMessage);

    $url = "http://$_SERVER[HTTP_HOST]";
    header("Location: {$url}/chat?room={$receiver_id}");
  }
}
