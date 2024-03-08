<?php

class UserService extends DatabaseService {
  const TABLE_NAME = 'users';

  public function __construct() {
    parent::__construct();
    $this->loadModel('UserModel');
  }

  public function findUserById($id) {
    $user = null;
    $res = $this->runQuery("SELECT * FROM `" . self::TABLE_NAME . "` WHERE `user_id` = ".$id);
    while($row = $res->fetch(PDO::FETCH_ASSOC)) {
      $user = new UserModel($row['user_id'], $row['username'], $row['email'], $row['password']);
    }
    return $user;
  }
}
