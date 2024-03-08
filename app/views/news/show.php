<?php
  view('components/header', [
    'categories' => $categories,
  ]);
  view('news/_detail', [
    'news' => $news ?? null,
    'user' => $user
  ]);
?>