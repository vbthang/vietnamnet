<?php

class UserModel {
  private $user_id;
  private $username;
  private $email;
  private $password;

  public function __construct($user_id, $username, $email, $password) {
    $this->user_id = $user_id;
    $this->username = $username;
    $this->email = $email;
    $this->password = password_hash($password, PASSWORD_DEFAULT);
  }

  public function getUserId() {
    return $this->user_id;
  }

  public function setUserId($user_id) {
    $this->user_id = $user_id;
  }

  public function getUsername() {
    return $this->username;
  }

  public function setUsername($username) {
    $this->username = $username;
  }

  public function getEmail() {
    return $this->email;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function getPassword() {
    return $this->password;
  }

  public function setPassword($password) {
    $this->password = password_hash($password, PASSWORD_DEFAULT);
  }
}