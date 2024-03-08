<?php

class CategoryService extends DatabaseService {
  const TABLE_NAME = 'categories';

  public function __construct() {
    parent::__construct();
    $this->loadModel('CategoryModel');
  }

  public function findAllCategory() {
    $categories = [];
    $res = $this->runQuery("SELECT * FROM `".self::TABLE_NAME."`");
    while($row = $res->fetch(PDO::FETCH_ASSOC)) {
      $category = new CategoryModel($row['category_id'], $row['category_name']);
      $categories[] = $category;
    }
    return $categories;
  }

  public function findOneById($id) {
    $category = null;
    $res = $this->runQuery("SELECT * FROM `" . self::TABLE_NAME . "` WHERE `category_id` = ".$id);
    while($row = $res->fetch(PDO::FETCH_ASSOC)) {
      $category = new CategoryModel($row['category_id'], $row['category_name']);
    }
    return $category;
  }
}
