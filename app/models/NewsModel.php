<?php

class NewsModel {
  private $news_id;
  private $title;
  private $content;
  private $publish_date;
  private $author_id;
  private $category_id;
  private $feature_image_url;

  public function __construct($news_id, $title, $content, $publish_date, $author_id, $category_id, $feature_image_url) {
    $this->news_id = $news_id;
    $this->title = $title;
    $this->content = $content;
    $this->publish_date = $publish_date;
    $this->category_id = $category_id;
    $this->author_id = $author_id;
    $this->feature_image_url = $feature_image_url;
  }

  public function getNewsId() {
    return $this->news_id;
  }

  public function setNewsId($news_id) {
    $this->news_id = $news_id;
  }

  public function getTitle() {
    return $this->title;
  }

  public function setTitle($title) {
    $this->title = $title;
  }

  public function getContent() {
    return $this->content;
  }

  public function setContent($content) {
    $this->content = $content;
  }

  public function getPublishDate() {
    return $this->publish_date;
  }

  public function setPublishDate($publish_date) {
    $this->publish_date = $publish_date;
  }

  public function getAuthorId() {
    return $this->author_id;
  }

  public function setAuthorId($author_id) {
    $this->author_id = $author_id;
  }

  public function getCategoryId() {
    return $this->category_id;
  }

  public function setCategoryId($category_id) {
    $this->category_id = $category_id;
  }

  public function getFeatureImageUrl() {
    return $this->feature_image_url;
  }

  public function setFeatureImageUrl($feature_image_url) {
    $this->feature_image_url = $feature_image_url;
  }
}