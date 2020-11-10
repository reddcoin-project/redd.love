<?php

  define('WEB_DIR', __DIR__);
  define('VENDOR_DIR', WEB_DIR . '/../vendor');
  define('SRC_DIR', WEB_DIR . '/src');
  define('PUBLIC_DIR', WEB_DIR . '/public');
  define('CACHE_DIR', WEB_DIR . '/cache');

  define('COMPONENT_DIR', SRC_DIR . '/components');
  define('VIEW_DIR', SRC_DIR . '/views');

  $overrideStage = isset($stage) ? $stage : false;
  if($_ENV['STAGE'] === 'production' or $overrideStage === 'production') {
    define('PRODUCTION', true);
  } else {
    define('PRODUCTION', false);
  }

  $css = [
    '/css/slides.css',
    '/css/sidebar.css',
    '/css/custom.css'
  ];

  $js = [
    '/js/jquery.min.js',
    '/js/slides.js',
    '/js/plugins.js',
    '/js/sidebar.js',
    '/js/custom.js'
  ];

  include(VENDOR_DIR . '/autoload.php');

?>