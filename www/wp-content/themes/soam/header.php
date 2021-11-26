<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Agence Pikoom">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="main_nav flex-row">
        <a href=""><img class="logo" src="<?php echo get_template_directory_uri() . '/images/logo.png'; ?>" alt="Logo Soam"/></a>
        <?php
                wp_nav_menu( array('menu' => 'primary_menu') );
                ?>
        <!-- <ul class="nav flex-row ">
          <li><a class="text" href="">Gamme Soam</a></li>
          <li><a class="text" href="">À propos</a></li>
          <li><a class="text"  href="">Conseils pratiques</a></li>
          <li><a class="text"  href="">Partenaires</a></li>
          <li><a class="text"  href="">Points de ventes</a></li>
        </ul> -->
        <div class="rs_icons">
          <!-- <a id="facebook" class="mg-16px-r" target="_blank" href="<?php echo get_field('instagram','option'); ?>" alt="Logo facebook"></a> -->
          <!-- <a id="instagram" target="_blank" href="<?php echo get_field('facebook','option'); ?>"><img src="" alt="Logo Instagram"></a> -->
        </div>
      </div>
    </header>