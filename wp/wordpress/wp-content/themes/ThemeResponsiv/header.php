<!DOCTYPE html>
<html>
  <head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="wrap">
      <header class="background-fixed">
        <?php if (is_single()) : ?>
          <p><a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a></p>
          <p><?php bloginfo('description'); ?></p>
        <?php else : ?>
          <h1><a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a></h1>
          <h2><?php bloginfo('description'); ?></h2>
        <?php endif; ?>
          <?php bloginfo( $show ); ?>
      </header>