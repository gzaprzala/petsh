<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/UserInfo.php';

class UserInfoRepository extends Repository {
  public function getUserInfo(string $email): ?UserInfo {
    $stmt = $this->database->connect()->prepare('
      SELECT * FROM users WHERE id = :id
    ');
}