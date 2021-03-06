<?php

  if(!isset($title)) {
    $title = 'Redd | The social currency.';
  }

  $headerStyleString = '';
  if(PRODUCTION === true && file_exists(CACHE_DIR . '/styles.min.css')) {
    $headerStyleString = '<link href="/styles.min.css?[version]" rel="stylesheet" type="text/css">';
  } else {
    foreach($css as $cssPath) {
      $headerStyleString .= '<link href="' . $cssPath . '?[version]" rel="stylesheet" type="text/css">';
    }
  }

  if(!isset($bodyClasses)) {
    $bodyClasses = 'scroll';
  }

?>
<!doctype html>
<!-- Test -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <base href="/">
    <title><?php echo $title; ?></title>
    <meta property="og:title" content="<?php echo $title; ?>" />
    <meta name="twitter:title" content="<?php echo $title; ?>" />
    <meta name="description" content="Redd is a digital currency that aims to bring value back to humanity and social interaction." />
    <meta name="og:description" content="Redd is a digital currency that aims to bring value back to humanity and social interaction." />
    <meta name="twitter:description" content="Redd is a digital currency that aims to bring value back to humanity and social interaction." />
    <meta name="og:image" content="assets/img/RDD-socialpic.jpg?p=6TmscY4a" />
    <meta name="twitter:image" content="assets/img/RDD-socialpic.jpg?p=6TmscY4a" />

    <link rel="preconnect" href="//fonts.gstatic.com/" crossorigin>
    <link rel="manifest" href="/manifest.json" />
    <link rel="shortcut icon" href="/favicon.ico" />

    <?php echo $headerStyleString; ?>

    <!-- Fonts and Material Icons -->
    <link rel="stylesheet" rel="preload" as="style" href="//fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;600;800&family=Rubik:wght@500&family=Gothic+A1:wght@100;300;400;500;600;800&family=Material+Icons&display=swap"/>

    <style>
        .slides,
        .slides p {
            font-family: 'Roboto', 'Gothic+A1', sans-serif;
            font-weight: 400;
        }
        .slides h1,
        .slides h2,
        .slides h3,
        .slides h4,
        .slides h5,
        .slides h6 {
            font-family: 'Rubik', 'Gothic+A1', sans-serif;
            font-weight: 500;
        }
    </style>
  
  <?php if(PRODUCTION) { ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121778538-6"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-121778538-6');
  </script>
  <?php } ?>

  <script>
    var Redd = {
      onReady: []
    };
  </script>

</head>

<body class="slides animated noPreload <?php echo $bodyClasses; ?>">