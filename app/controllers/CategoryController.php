<?php

class CategoryController extends BaseController {

  private $categoryService;
  private $newsService;

  public function __construct() {
    $this->callService('CategoryService');
    $this->categoryService = new CategoryService();

    $this->callService('NewsService');
    $this->newsService = new NewsService;
  }

  public function index() {
    $categories = $this->categoryService->findAllCategory();

    $this->view('categories/index', [
      'categories' => $categories,
    ]);
  }

  public function show() {
    $categoryId = $_GET['id'] ?? null;
    $limit = 10;
    $categories = $this->categoryService->findAllCategory();
    $newses = $this->newsService->findAllNewsesByCategoryId($limit, $categoryId);

    $this->view('categories/show', [
      'categories' => $categories,
      // 'category' => $category,
      'newses' => $newses
    ]);
  }
}