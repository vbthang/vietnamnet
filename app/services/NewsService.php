<?php

class NewsService extends DatabaseService {
  const TABLE_NAME = 'newses';

  public function __construct() {
    parent::__construct();
    $this->loadModel('NewsModel');
  }

  public function findAllNewsesByCategoryId($limit, $categoryId) {
    $newses = [];
    $res = $this->runQuery("SELECT * FROM `".self::TABLE_NAME."` WHERE `category_id` = ".$categoryId." LIMIT ".$limit);
    while($row = $res->fetch(PDO::FETCH_ASSOC)) {
      $news = new NewsModel($row['news_id'], $row['title'], $row['content'], $row['publish_date'], $row['author_id'], $row['category_id'], $row['feature_image_url']);
      $newses[] = $news;
    }
    return $newses;
  }

  public function findNewsById($id) {
    $news = null;
    $res = $this->runQuery("SELECT * FROM `" . self::TABLE_NAME . "` WHERE `news_id` = ".$id);
    while($row = $res->fetch(PDO::FETCH_ASSOC)) {
      $news = new NewsModel($row['news_id'], $row['title'], $row['content'], $row['publish_date'], $row['author_id'], $row['category_id'], $row['feature_image_url']);
    }
    return $news;
  }
}
