<?php

class BaseController {
  const VIEW_FOLDER_NAME = 'app/views';
  const SERVICE_FOLDER_NAME = 'app/services';

  protected function view($viewPath, array $data = []) {
    foreach($data as $key => $value) {
      $$key = $value;
    }

    require(ROOT_PATH.'/'.self::VIEW_FOLDER_NAME.'/'.$viewPath.'.php');
  }

  protected function callService($servicePath) {
    require(ROOT_PATH.'/'.self::SERVICE_FOLDER_NAME.'/'.$servicePath.'.php');
  }
}