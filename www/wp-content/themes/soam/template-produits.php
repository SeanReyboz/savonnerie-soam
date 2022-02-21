<?php
/*
Template Name: Page produit
 */
get_header();

$groupes = get_field('categories');

?>

    <nav class="search_menu" aria-label="Product filter">
      <ul>
      <li><a href="#all" class="search_menu_products">Tous les produis</a></li>
      <li><a href="#soap" class="search_menu_soap">Savons</a></li>
      <li><a href="#oil" class="search_menu_oil">Huiles et Sérums</a></li>
      <li><a href="#balm" class="search_menu_balm">Baumes</a></li>
      </ul>
    </nav>
    <div class="main-wrapper">

	    <?php
	        foreach ( $groupes as $key => $groupe ):
	    ?>
            <section class="mg-136px-t products">

                <!-- Catégorie de produit -->
                <h2 class="ft-bold ft-nunito mg-48px-b"><?= $groupe['title']  ?></h2>
                <div class="products-list" data-product-category="<?= $groupe['slug']; ?>">

                    <?php foreach ( $groupe['products'] as $product ): ?>
                    <!-- Produit -->
                    <article>
	                    <?php  if ( $product['image'] ):   ?>
                            <button type="button" class="products-list__item--img ft-mulish ft-semibold text-lg">
                                <img src="<?= $product['image']['url'] ?>" alt="<?= $product['image']['alt']  ?>">
                            </button>
	                    <?php endif;  ?>
                        <h3 class="products-list__item--title mg-16px-t">
                            <button class="ft-mulish ft-semibold text-lg"><?=  $product['title']  ?></button>
                        </h3>
                    </article>
                    <!-- Fin produit -->
                    <?php  endforeach; ?>
                </div>
            </section>
        <?php endforeach; ?>

        <h2><?php echo $groupe['title']; ?></h2>
        <div class="soap_window">
          <button id="neemteem" type="button" name="neemteem">
          <script type="text/javascript">
            document.getElementById("neemteem").addEventListener("click", function() {

            document.querySelector(".product").style.display = "flex";
            TweenMax.to(".product", 1, {
              delay: 0,
              opacity: 1,
              y: 0,
              ease: Expo.easeInOut,
            })

            });
          </script>




            <img src="<?= '' ?>" alt="Le savon Neem Teem">
            <h3>Neem Teem</h3>
      </div>

    </div>

<?php

    $info_block = get_field('pre_footer_information_block', 'options');

?>

    <section class="infos">
        <article class="about color-white">
          <h2 class="text-xxl ft-nunito">À propos</h2>
          <p class="about_text text-base">
              <?=  $info_block['about']['content']  ?>
          </p>
          <a href="<?= $info_block['about']['link'] ?>"
             class="button bg-magenta color-white text-base"
             id="more_about">En savoir plus
          </a>
        </article>
        <article class="find_me">
            <h2 class="text-xxl ft-nunito">Où me trouver ?</h2>
            <p class="about_text text-base">
                <?=  $info_block['find_me']['content']  ?>
            </p>
            <ul>
                <?php

                    $adresses = $info_block['find_me']['links']['adresses'];
                    $phones   = $info_block['find_me']['links']['phones'];
                    $mails    = $info_block['find_me']['links']['mails'];


                    if ( $adresses )  foreach ( $adresses as $adress ):

                        debug($adress);

                    endforeach;

                    if ( $phones ) foreach ( $phones as $phone ):

                        debug($phone);

                    endforeach;

                    if ( $mails ) foreach ( $mails as $mail ):

                        debug($mail);

                    endforeach;


                ?>

                <li><a href="#adress">1177 Route des Croës,73340 Lescheraines</a></li>
                <li><a href="#phone">0651600314</a></li>
                <li><a href="#mail">Email@mail.com</a></li>
            </ul>
        </article>
    </section>

    <?php
    get_footer()
    ?>
