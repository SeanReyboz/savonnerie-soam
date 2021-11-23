  <footer>
    <div class="content main-wrapper">
      <div class="brand-information">
        <img class="brand-logo" src="<?php echo get_template_directory_uri() . '/images/logo_white.png'  ?>" alt="Logo Soâm">
        <p class="text-sm color-white brand-desc">
          Une savonnerie artisanale et organique située dans les Bauges qui prend
          soin de votre corps et de la nature. Tous mes savons et cosmétiques sont
          100% locaux et faits mains avec des produits organiques de qualité.
        </p>
      </div>
      <?php dynamic_sidebar( 'footer-sidebar' ); ?>
    </div>
    <small class="copyrights color-white text-xs ft-mulish">
      &copy; 2021 La Savonnerie Soâm | Design et Développement par Pikoom 
    </small>
  </footer>

  <?php wp_footer(); ?>
  </body>
</html>