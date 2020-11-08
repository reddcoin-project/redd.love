<?php

  define('WEB_DIR', __DIR__);
  define('VENDOR_DIR', WEB_DIR . '/../vendor');
  define('SRC_DIR', WEB_DIR . '/src');
  define('PUBLIC_DIR', WEB_DIR . '/public');
  define('CACHE_DIR', WEB_DIR . '/cache');

  define('COMPONENT_DIR', SRC_DIR . '/components');
  define('VIEW_DIR', SRC_DIR . '/views');

  if($_ENV['STAGE'] === 'production') {
    define('PRODUCTION', true);
  } else {
    define('PRODUCTION', false);
  }

  include(VENDOR_DIR . '/autoload.php');

?>