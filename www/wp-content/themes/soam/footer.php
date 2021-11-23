  <footer>
    <div class="content main-wrapper">
      <div class="brand-information">
        <img class="brand-logo" src="<?php echo get_template_directory_uri() . '/images/logo_white.png'  ?>" alt="Logo Soâm">
        <p class="text-sm color-white brand-desc mg-24px-t">
          Une savonnerie artisanale et organique située dans les Bauges qui prend
          soin de votre corps et de la nature. Tous mes savons et cosmétiques sont
          100% locaux et faits mains avec des produits organiques de qualité.
        </p>
      </div>
      <?php dynamic_sidebar( 'footer-sidebar' ); ?>
      <nav class="footer-nav mg-32px-t">
        <div class="footer-nav-entry">
          <h3 class="footer-nav-entry-title">SOÂM</h3>
          <ul class="footer-nav-entry-list">
            <li><a href="">Gamme Soâm</a></li>
            <li><a href="">À propos</a></li>
            <li><a href="">Conseils Pratiques</a></li>
            <li><a href="">Partenaires</a></li>
            <li><a href="">Points de Vente</a></li>
          </ul>
        </div>
        <div class="footer-nav-entry">
          <h3 class="footer-nav-entry-title">CONTACT</h3>
          <ul class="footer-nav-entry-list">
            <li><a href="mailto:amandinepiroux@hotmail.fr">amandinepiroux@hotmail.fr</a></li>
            <li><a href="tel:+33123456789">+33 (0)1 23 45 67 89</a></li>
            <li class="socials">
              <a href="">
                <img
                  src="<?php echo get_template_directory_uri() . '/images/icons/instagram_white.svg'; ?>" 
                  alt="Icone Instagram">
              </a>
              <a href="">
                <img 
                  src="<?php echo get_template_directory_uri() . '/images/icons/facebook_white.svg'; ?>" 
                  alt="Icone Facebook">
              </a>
            </li>
          </ul>
        </div>
        <div class="footer-nav-entry">
          <h3 class="footer-nav-entry-title">POLITIQUES</h3>
          <ul class="footer-nav-entry-list">
            <li><a href="">Politique de Confidentialité</a></li>
            <li><a href="">Politique des Cookies</a></li>
            <li><a href="">Mentions Légales</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <small class="copyrights color-white text-xs ft-mulish mg-72px-t">
      &copy; 2021 La Savonnerie Soâm | Design et Développement par Pikoom 
    </small>
  </footer>

  <?php wp_footer(); ?>
  </body>
</html>