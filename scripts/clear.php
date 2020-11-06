<?php

  include('web/init.php');

  $foundFiles = scandir(CACHE_DIR);

  foreach($foundFiles as $foundFile) {

    if($foundFile === '.' || $foundFile === '..') continue;
    if($foundFile === '.gitignore') continue;
    
    unlink(CACHE_DIR . '/' . $foundFile);

  }

?>
