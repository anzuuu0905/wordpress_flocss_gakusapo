<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- fontawesomを使用する -->
  <!-- <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet"> -->
  <!-- favicon -->
  <!-- <link rel="icon" type="image/x-icon" href="img/common/favicon.ico">
  <link rel="apple-touch-icon" href="img/common/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" type="image/png" href="img/common/android-touch-icon.png" sizes="192x192">
  -->

  <!-- スライダー -->
  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/> -->

  <?php //if ( is_singular() ) wp_enqueue_script( "comment-reply" );
  ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="l-site">
    <header class="l-header p-header" id="header">
      <div class="p-header__inner l-inner">

      </div>
    </header>
