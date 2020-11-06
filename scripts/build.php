<?php

  include('web/init.php');

  use WyriHaximus\CssCompress\Factory;

  $foundFiles = scandir(VIEW_DIR);

  foreach($foundFiles as $foundFile) {

    if($foundFile === '.' || $foundFile === '..') continue;
    
    $fullPath = VIEW_DIR . '/' . $foundFile;

    $fileInfo = pathinfo($fullPath);

    if($fileInfo['extension'] !== 'php') continue;

    $pageName = $fileInfo['filename'];

    ob_start();
    include $fullPath;
    $content = ob_get_clean();

    $content = strtr($content, [
      '?[version]' => '?version=' . sha1(date('c'))
    ]);

    $parser = Factory::constructSmallest();
    $content = $parser->compress($content);

    $computedPath = CACHE_DIR . '/' . $pageName . '.html';

    file_put_contents($computedPath, $content);

  }

?>
