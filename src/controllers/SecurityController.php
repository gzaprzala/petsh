<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../repository/UserRepository.php';

class SecurityController extends AppController {
  private $userRepository;

  public function __construct() {
    parent::__construct();
    $this->userRepository = new UserRepository();
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

    if (!isset($_COOKIE['id'])) {
      setcookie('id', $user->getId(), time() + 3600, '/');
    }

    $url = "http://$_SERVER[HTTP_HOST]";
    header("Location: {$url}/search");
  }

  public function register() {
    if (!$this->isPost()) {
      return $this->render('register');
    }

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmedPassword = $_POST['confirmedPassword'];

    if ($password !== $confirmedPassword) {
      return $this->render('register', ['messages' => ['Please provide proper password']]);
    }

    $unique_id = (int)uniqid();

    $user = new User($username, $email, md5($password), $unique_id);

    $this->userRepository->addUser($user);

    return $this->render('login', ['messages' => ['You\'ve been succesfully registered!']]);
  }

  public function logout() {
    if (isset($_COOKIE['id'])) {
      setcookie('id', '', time() - 3600, '/');
    }
    $url = "http://$_SERVER[HTTP_HOST]";
    header("Location: {$url}/login");
  }
}
