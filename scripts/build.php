<?php

  use voku\helper\HtmlMin;
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
    
    // Header Attributes
    if(isset($title)) unset($title);
    if(isset($bodyClasses)) unset($bodyClasses);

    // Footer Attributes
    if(isset($bodyClasses)) unset($showNextSlideButton);
    if(isset($bodyClasses)) unset($footerClasses);

    ob_start();
    include $fullPath;
    $content = ob_get_clean();

    $content = strtr($content, [
      '?[version]' => '?version=' . sha1(date('c'))
    ]);

    $computedPath = CACHE_DIR . '/' . $pageName . '.html';

    file_put_contents($computedPath, $content);

  }

  // Minify CSS
  $cssMinifier = new Minify\CSS();

  foreach($css as $file) {
    if(stripos($file, '://') !== false) {
      $fileContent = file_get_contents($file);
      $cssMinifier->add($fileContent);
    } else {
      $fullPath = PUBLIC_DIR . $file;
      $cssMinifier->addFile($fullPath);
    }
  }

  $computedCssPath = CACHE_DIR . '/styles.min.css';
  $cssMinifier->minify($computedCssPath);

  // Minify JS
  $jsMinifier = new Minify\JS();

  foreach($js as $file) {
    if(stripos($file, '://') !== false) {
      $fileContent = file_get_contents($file);
      $jsMinifier->add($fileContent);
    } else {
      $fullPath = PUBLIC_DIR . $file;
      $jsMinifier->addFile($fullPath);
    }
  }

  $computedJsPath = CACHE_DIR . '/scripts.min.js';
  $jsMinifier->minify($computedJsPath);

?>
