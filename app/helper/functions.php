<?php

const VIEW_FOLDER_NAME = 'app/views';

function view($viewPath, array $data = []) {
  foreach($data as $key => $value) {
    $$key = $value;
  }

  require(ROOT_PATH.'/'.VIEW_FOLDER_NAME.'/'.$viewPath.'.php');
}

/**
 * $data = [
 *  'url' = "http:/..",
 *  'image' = "https:/...",
 *  'patient' = [
 *    ...
 *  ]
 * ]
 * 
 * =>
 * $key = 'url'
 * $$key = $url
 * 
 * 
 * $url = "http://"
 * $image = "http:///"
 * $patents = [
 *  ...
 * ]
 */