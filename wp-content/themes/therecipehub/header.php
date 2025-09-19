<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <nav class="navbar">
      <ul class="nav-links">
        <li><a href="<?php echo site_url('/'); ?>">Front Page</a></li>
        <li><a href="<?php echo site_url('/recipes'); ?>">Recipes</a></li>
        <li><a href="<?php echo site_url('/tips_advice'); ?>">Tips & Advice</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="<?php echo site_url('/weekly-chef'); ?>">Masterchefs</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <div class="nav-user">
        <a href="#"><i class="fa-solid fa-user"></i></a>
      </div>
    </nav>
  </header>
