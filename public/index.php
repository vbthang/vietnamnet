<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VietNamNet</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>
  <div id="root" class="container-fluid">
  <?php
    require('../app/config/config.php');
    require(ROOT_PATH.'/app/controllers/BaseController.php');
    require(ROOT_PATH.'/app/services/DatabaseService.php');
    require(ROOT_PATH.'/app/helper/functions.php');

    $controllerName = ucfirst(strtolower($_REQUEST['controller'] ?? 'home')).'Controller';
    require(ROOT_PATH.'/app/controllers/'.$controllerName.'.php');
    $controllerObj = new $controllerName;

    $actionName = strtolower($_REQUEST['action'] ?? 'index');
    $controllerObj->$actionName();

// // ?controller action
//     if($_REQUEST['controller'] == 'news') {
//       require(ROOT_PATH.'/app/controllers/NewsController.php');
//       $newsController = new NewsController();
//       if($_REQUEST['action'] == 'show') {
//         $newsController->show();
//       }
//     } else if($_REQUEST['controller'] == 'category') {
//       require(ROOT_PATH.'/app/controllers/CategoryController.php');
//       $categoryController = new CategoryController();
//       if($_REQUEST['action'] == 'show') {
//         $categoryController->show();
//       }
//     }
  ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
