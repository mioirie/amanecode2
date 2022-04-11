<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="sp.css" rel="stylesheet" type="text/css" media="screen and (min-width: 768px)" />
  <title>amane aromatique cafe</title>
  <link rel="stylesheet" href="css\reset.css" />
  <link rel="stylesheet" href="css\index.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600&family=Gorditas&family=Indie+Flower&family=Noto+Sans+JP:wght@900&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="header-img">

    <img src="<?php echo get_template_directory_uri(); ?>/img/header.png" alt="no-image" class="hdimg">
    <p class="header-text">amane aromatique cafe</p>
  </div> <!-- headerimg -->