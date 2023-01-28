<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../repository/UserRepository.php';

class SecurityController extends AppController {
  private $userRepository;

  public function __construct() {
    parent::__construct();
    $this->userRepository = new UserRepository();
    session_start();
  }

  public function login() {

    if (!$this->isPost()) {
      return $this->render('login');
    }

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $user = $this->userRepository->getUser($username);

    if (!$user) {
      return $this->render('login', ['messages' => ['User not found!']]);
    }

    if ($user->getUsername() !== $username) {
      return $this->render('login', ['messages' => ['User with this login not exist!']]);
    }

    if ($user->getPassword() !== $password) {
      return $this->render('login', ['messages' => ['Wrong password!']]);
    }

    $_SESSION['id'] = $user->getId();

    $url = "http://$_SERVER[HTTP_HOST]";
    header("Location: {$url}/search");
  }

  public function register() {
    if (!$this->isPost()) {
      return $this->render('register');
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmedPassword = $_POST['confirmedPassword'];

    if ($password !== $confirmedPassword) {
      return $this->render('register', ['messages' => ['Please provide proper password']]);
    }

    $unique_id = uniqid();

    $user = new User($username, md5($password), $unique_id);

    $this->userRepository->addUser($user);

    return $this->render('login', ['messages' => ['You\'ve been succesfully registered!']]);
  }

  public function logout() {
    session_start();
    session_unset();
    session_destroy();
    $url = "http://$_SERVER[HTTP_HOST]";
    header("Location: {$url}/login");
  }
}
