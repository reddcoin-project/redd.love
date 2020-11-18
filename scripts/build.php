<?php

  use WyriHaximus\CssCompress\Factory;
  use MatthiasMullie\Minify;

  $stage = 'production';
  include('web/init.php');

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

  // Minify CSS
  $cssMinifier = new Minify\CSS();

  foreach($css as $file) {
    $fullPath = PUBLIC_DIR . $file;
    $cssContent = file_get_contents($fullPath);
    $cssMinifier->add($fullPath);
  }

  $computedCssPath = CACHE_DIR . '/styles.min.css';
  $cssMinifier->minify($computedCssPath);

  // Minify JS
  $jsMinifier = new Minify\JS();

  foreach($js as $file) {
    $fullPath = PUBLIC_DIR . $file;
    $jsContent = file_get_contents($fullPath);
    $jsMinifier->add($fullPath);
  }

  $computedJsPath = CACHE_DIR . '/scripts.min.js';
  $jsMinifier->minify($computedJsPath);

?>
