<?php

// Get the brand description (located under the brand icon)
$brand_desc = get_field('description', 'options');

// Get the footer navigation content
$footer_fields = get_field('footer_nav', 'options');

// ---
//  Split the footer fields content
// ---

// First field (brand related)
$brand = $footer_fields['brand'];
$brand_links = $brand['links'];

// Second field (contact info)
$contact = $footer_fields['contact'];
$contact_content = $contact['links'];
$contact_emails = $contact_content['emails'];
$contact_phone = $contact_content['phone'];
$contact_links = $contact_content['links'];

// Third Field (legals & politics)
$legals = $footer_fields['legals'];
$legals_links = $legals['links'];



?>
  <footer>
    <div class="content main-wrapper">
      <div class="brand-information">
        <img class="brand-logo" src="<?php echo get_template_directory_uri() . '/images/logo_white.png'  ?>" alt="Logo Soâm">
        <div class="text-sm color-white brand-desc mg-24px-t ft-mulish">
          <?php echo $brand_desc; ?>
        </div>
      </div>
      <?php dynamic_sidebar( 'footer-sidebar' ); ?>
      <nav class="footer-nav mg-32px-t">
        <div class="footer-nav-entry">
          <h3 class="footer-nav-entry-title">
            <?php echo $brand['title']; ?>
          </h3> 
          <!-- 46, 60, 87 -->
          <ul class="footer-nav-entry-list">
            <?php
              // Make sure that $brand_links is not empty to prevent errors 
              if(!empty($brand_links)) foreach ($brand_links as $links) { 
            ?>
              <li><a href="<?php echo $links['link']['url']; ?>"><?php echo $links['link']['title']; ?></a></li>
            <?php } ?>
          </ul>
        </div>
        <div class="footer-nav-entry">
          <h3 class="footer-nav-entry-title">
            <?php echo $contact['title']; ?>
          </h3>
          <ul class="footer-nav-entry-list">
            <?php 
              // Go through every email address, if any

              if(!empty($contact_content)) {
              

              foreach ($contact_content['emails'] as $emails) { 
                foreach ($emails as $email) { 

            ?>

            <li><a href="mailto:<?php echo trim($email); ?>"><?php echo $email; ?></a></li>

            <?php } } } ?>

            <!-- Phone number -->
            <li><a href="tel:+<?php echo $contact_phone; ?>">+<?php echo $contact_phone; ?></a></li>
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
          <h3 class="footer-nav-entry-title">
            <?php echo $legals['title']; ?>
          </h3>
          <ul class="footer-nav-entry-list">
            <?php 
              // Make sure $legals_links is not empty to prevent any error
              if(!empty($legals_links)) foreach($legals_links as $links) { 
            ?>
              <li><a href="<?php echo $links['link']['url']; ?>"><?php echo $links['link']['title']; ?></a></li>
            <?php } ?>
          </ul>
        </div>
      </nav>
    </div>
    <small class="copyrights color-white text-xs ft-mulish mg-72px-t">
      &copy; <?php echo date('Y'); ?> La Savonnerie Soâm | Design et Développement par <a href="https://mmi.univ-smb.fr/">Pikoom 🌵</a>
    </small>
  </footer>

  <?php wp_footer(); ?>
  </body>
</html>