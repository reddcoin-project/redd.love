<?php

  include('init.php');

  $page = 'index';

  if(isset($_GET['view'])) {
    $page = $_GET['view'];
  }

  $viewPath = 'src/views/' . $page . '.php';

  if(file_exists($viewPath)) {

    ob_start();
    include $viewPath;
    $content = ob_get_clean();

    echo strtr($content, [
      '?[version]' => '?version=' . sha1(date('c'))
    ]);

  }

?>
