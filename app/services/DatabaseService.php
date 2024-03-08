<?php

class DatabaseService {
  const MODEL_FOLDER_NAME = 'app/models/';

  private $host = DB_HOST;
  private $username = DB_USERNAME;
  private $password = DB_PASSWORD;
  private $dbname = DB_DATABASE;

  private $conn = null;

  public function __construct() {
    try {
      $this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->username, $this->password);
    } catch (PDOException $e) {
      $this->conn = null;
    }
  }

  protected function runQuery($query) {
    try {
      if($this->conn) {
        return $this->conn->query($query);
      }
    } catch (PDOException $e) {
    }
  }

  protected function loadModel($modelPath) {
    require(ROOT_PATH.'/'.self::MODEL_FOLDER_NAME.'/'.$modelPath.'.php');
  }
}