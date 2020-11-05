<?php

  include('init.php');

  $foundFiles = scandir(VIEW_DIR);

  foreach($foundFiles as $foundFile) {

    if($foundFile === '.' || $foundFile === '..') continue;
    
    $fullPath = VIEW_DIR . '/' . $foundFile;

    $fileInfo = pathinfo($fullPath);

    if($fileInfo['extension'] !== 'php') continue;

    $pageName = $fileInfo['filename'];

    ob_start();
    include $fullPath;
    $content = ob_get_clean() . PHP_EOL . '<!-- generated -->';

    $computedPath = CACHE_DIR . '/' . $pageName;

    file_put_contents($computedPath, $content);

  }

?>
