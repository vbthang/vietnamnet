<?php

class NewsController extends BaseController {
  private $newsService;
  private $categoryService;
  private $userService;

  public function __construct() {
    $this->callService('NewsService');
    $this->newsService = new NewsService;
    
    $this->callService('CategoryService');
    $this->categoryService = new CategoryService();

    $this->callService('UserService');
    $this->userService = new UserService();

  }

  public function index() {
    echo __METHOD__;
  }

  public function show() {
    $newsId = $_GET['id'] ?? null;
    $news = $this->newsService->findNewsById($newsId);
    $categories = $this->categoryService->findAllCategory();
    $user = $this->userService->findUserById($news->getAuthorId());

    $this->view('news/show', [
      'categories' => $categories,
      'news' => $news,
      'user' => $user
    ]);
  }

  public function add() {
    echo __METHOD__;
  }
}