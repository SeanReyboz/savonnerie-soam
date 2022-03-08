<!DOCTYPE html>
<html lang="fr-FR" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta name="author" content="Agence Pikoom" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php bloginfo('name'); ?></title>
    <meta property="description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:url" content="https://www.savonneriesoam.fr/"/>
    <meta property="og:title" content="<?php bloginfo('name'); ?>"/>
    <meta property="og:description" content="<?php bloginfo('description'); ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:locale" content="fr_FR"/>
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
    <link rel="shortcut icon" href="<?= get_template_directory_uri() . '/favicon.png' ?>" />
    <?php 
      wp_head(); 
      show_admin_bar(true); 
    ?>
  </head>
  <body>
    <header class="header">
      <div class="main_nav flex-row">
        <a href="<?= home_url(); ?>" >
          <img 
            class="logo" 
            src="<?= get_template_directory_uri() . '/images/logo.png'; ?>" 
            alt="Logo Soam" 
          />
        </a>
        <?php
        
        // Afficher le menu
          wp_nav_menu([
            'menu' => 'primary_menu',
            'container' => 'nav',
            'menu_class' => 'nav flex-row',
          ]); 

        ?>
          <button class="responsive-nav-btn js-burger" type="button">
              <span></span>
              <span></span>
              <span></span>
          </button>
        <?php 

          /** 
           * Récupérer les liens vers les réseaux sociaux
           */

          $socials = get_field("social_networks", "option");
        
        ?>

        <div class="rs_icons">
          <a 
            class="mg-16px-r"
            target="_blank"
            rel="noopener noreferrer"
            href="<?= $socials['facebook'] ?>" 
          >
          <img 
              src="<?= get_template_directory_uri() . '/images/icons/facebook.svg' ?>"
              alt="Logo Facebook"
            /></a>
          <a 
            target="_blank"
            rel="noopener noreferrer"
            href="<?= $socials['instagram'] ?>"
          >
          <img 
              src="<?= get_template_directory_uri() . '/images/icons/instagram.svg' ?>" 
              alt="Logo Instagram" 
            /></a>
        </div>
      </div>

      <div class="responsive-nav js-responsive-nav" style="--bg-image: url('<?= get_template_directory_uri() . '/images/blob/menu-responsive.png' ?>') ">

          <a href="<?= home_url(); ?>" >
              <img
                  class="logo"
                  src="<?= get_template_directory_uri() . '/images/logo.png'; ?>"
                  alt="Logo Soam"
              />
          </a>
	      <?php
              // Afficher le menu
              wp_nav_menu([
                  'menu'       => 'primary_menu',
                  'container'  => 'nav',
                  'menu_class' => 'nav flex-row',
              ]);
	      ?>
          <hr class="separator" />

          <div class="rs_icons">
              <a
                  class="mg-16px-r"
                  target="_blank"
                  rel="noopener noreferrer"
                  href="<?= $socials['facebook'] ?>"
              >
                  <img
                      src="<?= get_template_directory_uri() . '/images/icons/facebook.svg' ?>"
                      alt="Logo Facebook"
                  /></a>
              <a
                  target="_blank"
                  rel="noopener noreferrer"
                  href="<?= $socials['instagram'] ?>"
              >
                  <img
                      src="<?= get_template_directory_uri() . '/images/icons/instagram.svg' ?>"
                      alt="Logo Instagram"
                  /></a>
          </div>
      </div>
    </header>