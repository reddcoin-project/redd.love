<!doctype html>
<!-- Test -->
<html>
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

    <!-- Compressed Styles -->
    <link href="/css/slides.min.css?[version]" rel="stylesheet" type="text/css">
    
    <!-- Uncompressed Styles -->
    <link href="/css/slides.min.css?[version]" rel="stylesheet" type="text/css">

    <!-- Custom Styles -->
    <link href="/css/custom.css?[version]" rel="stylesheet" type="text/css">

    <!-- Fonts and Material Icons -->
    <link rel="stylesheet" as="font" href="//fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;600;800&family=Rubik:wght@500&family=Gothic+A1:wght@100;300;400;500;600;800&family=Material+Icons&display=swap"/>

    <style type="text/css">
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
    
    <!-- jQuery 3.5.1 -->
    <script src="/js/jquery.min.js"></script>

    <!-- Uncompressed Scripts -->
    <script src="/js/slides.js?[version]" type="text/javascript"></script>
    <script src="/js/plugins.js?[version]" type="text/javascript"></script>
  
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

</head>
