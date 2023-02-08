<?php

require_once 'AppController.php';

class DefaultController extends AppController {
  public function index() {
    if (isset($_COOKIE['id']) || !empty($_COOKIE['id'])) {
      header("Location: search");
      exit;
    }

    $this->render('home');
  }

  public function login() {
    $this->render('login');
  }

  public function register() {
    $this->render('register');
  }
}
