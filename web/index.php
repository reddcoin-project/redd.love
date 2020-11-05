<?php

  define('SRC_DIR', __DIR__ . '/src');

  define('COMPONENT_DIR', SRC_DIR . '/components');
  define('VIEW_DIR', SRC_DIR . '/views');

  include('../vendor/autoload.php');

  $page = 'index';

  if(isset($_GET['view'])) {
    $page = $_GET['view'];
  }

  $viewPath = 'src/views/' . $page . '.php';

  if(file_exists($viewPath)) {
    include($viewPath);
    die();
  }

?>
