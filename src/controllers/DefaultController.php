<?php

require_once 'AppController.php';

class DefaultController extends AppController {
  public function index() {
    $this->render('home');
  }

  public function login() {
    $this->render('login');
  }

  public function register() {
    $this->render('register');
  }

  public function search() {
    $this->render('search');
  }
}