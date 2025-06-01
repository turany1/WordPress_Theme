<!DOCTYPE html>
<html <?php language_attributes(); ?> data-theme="light">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="site-header" class="site-header sticky-top shadow-sm py-3">
  <div class="container d-flex justify-content-between align-items-center">
    <!-- Site Branding -->
    <div class="site-branding">
      <?php
      if (has_custom_logo()) {
          the_custom_logo();
      } else {
          echo '<a class="navbar-brand site-title" href="' . esc_url(home_url('/')) . '">';
          bloginfo('name');
          echo '</a>';
      }
      ?>
    </div>

    <!-- Navigation Menu -->
    <nav class="main-navigation">
      <?php
      wp_nav_menu(array(
          'theme_location' => 'primary',
          'menu_class'     => 'nav',
          'container'      => false,
      ));
      ?>
    </nav>

    <!-- Light/Dark Mode Toggle Button -->
    <button id="theme-toggle" class="btn btn-outline-dark ms-3" aria-label="Toggle theme">
      🌓
    </button>
  </div>
</header>

<main id="main" class="site-main py-4">
