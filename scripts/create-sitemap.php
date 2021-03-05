<?php

  include('web/init.php');
  $foundFiles = scandir(VIEW_DIR);

  $sitemap = [];
  $sitemap[] = '<?xml version="1.0" encoding="UTF-8"?>';
  $sitemap[] = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

  foreach($foundFiles as $foundFile) {

    if($foundFile === '.' || $foundFile === '..') continue;
    $fullPath = VIEW_DIR . '/' . $foundFile;

    $fileInfo = pathinfo($fullPath);
    if($fileInfo['extension'] !== 'php') continue;

    $pageName = $fileInfo['filename'];

    $sitemap[] = TAB . '<url>';
    $sitemap[] = TAB . TAB . '<loc>https://' . $_ENV['HOST'] . '/' . $pageName . '/</loc>';
    $sitemap[] = TAB . TAB . '<lastmod>' . date('Y-m-d') . '</lastmod>';
    $sitemap[] = TAB . '</url>';

  }

  $sitemap[] = '</urlset>';

  $sitemapContent = implode(PHP_EOL, $sitemap) . PHP_EOL;

  file_put_contents(PUBLIC_DIR . '/sitemap.xml', $sitemapContent);

?>
