<?php
  view('components/header', [
    'categories' => $categories,
  ]);
  view('categories/_detail', [
    'newses' => $newses ?? [],
  ]);
?>