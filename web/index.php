<?php

  include('init.php');

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
